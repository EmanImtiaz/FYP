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


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'remarks' => 'nullable',
            'dates' => 'array',
            'services' => 'array',
            'totalAmount' => 'required',

        ]);

        $validatedData['user_id'] = Auth::id();

        $booking = Booking::create($validatedData);

        $dates = $request->input('dates');
        $selectedServices = $request->input('services');
        $totalAmount = $validatedData['totalAmount'];

        foreach ($selectedServices as $serviceId) {
            foreach ($dates as $date) {
                BookingService::create([
                    'booking_id' => $booking->id,
                    'package_service_id' => $serviceId,
                    'date_selected' => $date,
                    'total_amount' => $totalAmount,
                ]);
            }
        }

        return redirect()->route('bookingform');
    }

}
