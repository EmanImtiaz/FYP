<?php

namespace App\Http\Controllers;

use App\Models\PackageService;
use App\Models\Package;
use App\Models\Booking;
use App\Models\Payment;
use App\Models\PaymentAccount;
use App\Models\BookingService;
use App\Models\City;
use App\Models\Town;
use App\Models\Province;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class BookingController extends Controller
{
    public function bookingForm($packageId)
    {
        $booking = new Booking();
        $package = Package::with('packageServices')->find($packageId);
        $packageServices = $package->packageServices;
        $payments = Payment::all();
        $provinces = Province::all();
        $paymentAccounts = PaymentAccount::all();

        return view('Frontend.bookingphotographer.bookingform', compact('booking', 'provinces','package', 'packageServices', 'payments','paymentAccounts'));
    }

    public function getCities(Request $request)
    {
        $provinceId = $request->input('province_id');
        $cities = City::where('province_id', $provinceId)->get();

        return response()->json(['cities' => $cities]);
    }

    public function getTowns(Request $request)
    {
        $cityId = $request->input('city_id');
        $towns = Town::where('city_id', $cityId)->get();

        return response()->json(['towns' => $towns]);
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
      // Validate the incoming request data
      $validatedData = $request->validate([
        'package_id' => 'required',
          'name' => 'required',
          'email' => 'required',
          'phone' => 'required',
          'remarks' => 'nullable',
          'payment_method_options' => 'required',
          'dates' => 'array',
          'services' => 'array',
          'totalAmount' => 'required',
          'province_id' => 'required',
          'city_id' => 'required',
          'town_id' => 'required',
          'payment_id' => $request->input('payment_method_options') == '1' ? 'required' : 'nullable',
          'evidence' => 'nullable',
          'account_name' => $request->input('payment_method_options') == '1' ? 'required' : 'nullable',
          'account_number' =>$request->input('payment_method_options') == '1' ? 'required' : 'nullable',
          'is_paid' => 'nullable',
          'services' => 'required|array',
          'dates' => 'required|array',
      ]);

    // Retrieve the selected package ID from the request
    $packageId = $validatedData['package_id'];

    // Retrieve the corresponding photographer_profile_id from the PackageService model
    $packageService = PackageService::where('package_id', $packageId)->first();

    // Check if a matching package service is found
    if ($packageService) {
        // Add the photographer_profile_id to the validated data
        $validatedData['photographer_profile_id'] = $packageService->user_id;
    } else {
        // Handle the case where no matching package service is found
        return redirect()->route('Frontend.profile')->with('error', 'Selected package is not valid.');
    }

    // Add user_id
    $validatedData['user_id'] = Auth::id();

      // Create a new booking record with the validated data
    $booking = Booking::create($validatedData);

    // Process booking services
    $selectedServices = $request->input('services');
    $dates = $request->input('dates');

    foreach ($dates as $date) {
        $dateArray = explode(',', $date);

        foreach ($dateArray as $singleDate) {
            foreach ($selectedServices as $serviceId) {
                BookingService::create([
                    'user_id' => Auth::id(),
                    'photographer_profile_id' => $packageService->user_id,
                    'booking_id' => $booking->id,
                    'package_service_id' => $serviceId,
                    'date_selected' => $singleDate,
                ]);
            }
        }
    }

    // Determine payment method and redirect accordingly
    $paymentMethod = $request->input('payment_method_options');

    if ($paymentMethod == '0') {
        // Offline payment, update total amount and redirect
        $booking->update(['total_amount' => $validatedData['totalAmount']]);
        return redirect()->route('Frontend.profile');
    } elseif ($paymentMethod == '1') {
        // Online payment, check if a payment option is selected
        $selectedPayment = $request->input('payment_id');

        // Update total amount and redirect
        $booking->update(['total_amount' => $validatedData['totalAmount'], 'is_paid' => 1]);
        return redirect()->route('Frontend.profile');
    } else {
        // Invalid payment method selected
        return redirect()->back()->with('error', 'Invalid payment method');
    }
}

// profile bookings //
public function bookings()
{
    // Check if the authenticated user is a photographer
    if (Auth::user()->hasAnyRole('photographer')) {
        // Get the photographer's profile ID
        $photographerProfileId = Auth::user()->photographerProfile->id;

        // Retrieve bookings associated with the photographer's profile ID
        $bookings = Booking::whereHas('bookingServices', function ($query) use ($photographerProfileId) {
            $query->where('photographer_profile_id', $photographerProfileId);
        })->get();
    } else {
        // If the user is not a photographer, retrieve all bookings
        $bookings = Booking::all();
    }

    return view('Frontend.bookings', compact('bookings'));
}


}
