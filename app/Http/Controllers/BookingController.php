<?php

namespace App\Http\Controllers;

use App\Models\PackageService;
use App\Models\Package;
use App\Models\Booking;
use App\Models\Payment;
use App\Models\BookingService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class BookingController extends Controller
{
    public function bookingForm($packageId)
    {
        $booking = new Booking();
        $package = Package::with('packageServices')->find($packageId);
        $packageServices = $package->packageServices;
        $payments = Payment::all(); // Get all payment methods

        return view('Frontend.bookingphotographer.bookingform', compact('booking', 'package', 'packageServices', 'payments'));
    }


    public function calculateServicesTotalPrice(Request $request, $packageId)
    {
        $services = $request->input('services');
        $totalPrice = $this->calculateServicesTotalPriceLogic($packageId, $services);

        return response()->json(['total_price' => $totalPrice]);
    }


  private function calculateServicesTotalPriceLogic($packageId, $selectedServices): float
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
          'payment_method' => 'required',
          'dates' => 'array',
          'services' => 'array',
          'totalAmount' => 'required',
      ]);

      $validatedData['user_id'] = Auth::id();
      $totalAmount = $validatedData['totalAmount'];

      $booking = Booking::create($validatedData);

      $selectedServices = $request->input('services');
      $dates = $request->input('dates');

      foreach ($dates as $date) {
          $dateArray = explode(',', $date);

          foreach ($dateArray as $singleDate) {
              foreach ($selectedServices as $serviceId) {
                  BookingService::create([
                      'booking_id' => $booking->id,
                      'package_service_id' => $serviceId,
                      'date_selected' => $singleDate,
                  ]);
              }
          }
      }

      $paymentMethod = $request->input('payment_method');

      if ($paymentMethod == '1') {
          return redirect()->back()->with('message', 'Complete your payment.');
      }

      $booking->update(['total_amount' => $totalAmount, 'payment_id' => $paymentMethod]);

      return redirect()->route('Frontend.profile');
  }

public function bookings()
{
    $bookings = Booking::all();
    return view('Frontend.bookings', compact('bookings'));

}

}
