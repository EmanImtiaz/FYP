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
      $validatedData = $request->validate([
          'name' => 'required',
          'email' => 'required',
          'phone' => 'required',
          'remarks' => 'nullable',
          'payment_method_options' => 'required',
          'dates' => 'array',
          'services' => 'array',
          'totalAmount' => 'required',
          'province' => 'required',
          'city' => 'required',
          'town' => 'required',
          'payment_method' => $request->input('payment_method_options') == 1 ? 'required' : '',
          'evidence' => 'nullable',
          'account_name' => $request->input('payment_method_options') == 1 ? 'required' : 'nullable',
          'account_number' =>$request->input('payment_method_options') == 1 ? 'required' : 'nullable',
          'is_paid' => 'nullable',
          'services' => 'required|array',
          'dates' => 'required|array',


      ]);

        $validatedData['user_id'] = Auth::id();
        $validatedData['photographer_profile_id'] = Auth::id();
        $totalAmount = $validatedData['totalAmount'];

        $booking = Booking::create($validatedData);

        $selectedServices = $request->input('services');
        $dates = $request->input('dates');

        foreach ($dates as $date) {
            $dateArray = explode(',', $date);

            foreach ($dateArray as $singleDate) {
                foreach ($selectedServices as $serviceId) {
                    BookingService::create([
                        'user_id' => Auth::id(),
                        'photographer_profile_id' => Auth::id(),
                        'booking_id' => $booking->id,
                        'package_service_id' => $serviceId,
                        'date_selected' => $singleDate,
                    ]);
                }
            }
        }

        $paymentMethod = $request->input('payment_method_options');

        if ($paymentMethod == '0') {
            // Offline payment, update total amount and payment id
            $booking->update(['total_amount' => $totalAmount, 'payment_id' => $paymentMethod]);
            return redirect()->route('Frontend.profile');
        } elseif ($paymentMethod == '1') {
            // Online payment, check if a payment option is selected
            $selectedPayment = $request->input('payment_method');

            if (!$selectedPayment) {
                return redirect()->back()->with('error', 'Select an online payment method');
            }

            return redirect()->back()->with('message', 'Complete your payment');
        } else {
            // Invalid payment method selected
            return redirect()->back()->with('error', 'Invalid payment method');
        }

    }

public function bookings()
{
    $bookings = Booking::all();
    return view('Frontend.bookings', compact('bookings'));

}

}
