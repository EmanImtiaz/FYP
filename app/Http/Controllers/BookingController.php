<?php

namespace App\Http\Controllers;

use App\Models\PackageService;
use App\Models\Package;
use App\Models\Booking;
use App\Models\BookingService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function bookingForm($packageId)
    {
        $package = Package::with('packageServices')->find($packageId);
        $packageServices = $package->packageServices;

        return view('Frontend.bookingphotographer.bookingform', compact('package', 'packageServices'));
    }

    public function calculateTotalPrice(Request $request, $packageId)
    {
        $services = $request->input('services');
        $totalPrice = $this->calculateTotalPriceLogic($packageId, $services);

        return response()->json(['total_price' => $totalPrice]);
    }


  private function calculateTotalPriceLogic($packageId, $selectedServices): float
  {
      $packageServices = PackageService::whereIn('service_id', $selectedServices)
          ->where('package_id', $packageId)
          ->get();

      $totalAmount = 0;

      foreach ($packageServices as $packageService) {
          $servicePrice = $packageService->price;
          $serviceDiscount = $packageService->discount;

          $totalAmount += ($servicePrice - $serviceDiscount);
      }

      return $totalAmount;
  }


    public function storeBooking(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'date' => 'required|date',
            'services' => 'required|array',
            'totalAmount' => 'required|numeric',
        ]);

        // Create a booking
        $booking = Booking::create([
            'user_id' => auth()->user()->id,
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'remarks' => $request->input('remarks'),
            'date' => $request->input('date'),
        ]);

        // Attach services to the booking
        foreach ($request->input('services') as $serviceId) {
            $packageService = PackageService::find($serviceId);

            BookingService::create([
                'booking_id' => $booking->id,
                'package_service_id' => $serviceId,
                'total_amount' => $packageService->price - $packageService->discount,
            ]);
        }

        // Redirect to success page or wherever needed
        return redirect()->route('booking.success');
    }


}
