<?php

namespace App\Http\Controllers;

use App\Models\PackageService;
use App\Models\Package;
use App\Models\Service;
use App\Models\Booking;
use App\Models\BookingService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function bookingForm($packageId)
    {
        $package = Package::with('services')->find($packageId);
        $selectedServices = $package->services->pluck('id')->toArray();
        $totalAmount = $this->calculateTotalAmount($selectedServices, $package);

        return view('Frontend.bookingphotographer.bookingform', compact('package', 'selectedServices', 'totalAmount'));
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

    // Function to calculate total amount based on selected services
    private function calculateTotalAmount($selectedServices, $package)
    {
        $totalAmount = 0;

        foreach ($selectedServices as $serviceId) {
            $packageService = PackageService::find($serviceId);

            if ($packageService) {
                $totalAmount += $packageService->price - $packageService->discount;
            }
        }

        return $totalAmount;
    }
}
