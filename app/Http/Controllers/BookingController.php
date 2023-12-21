<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\PackageService;
use App\Models\Booking;
use App\Models\BookingService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function showBookingForm($packageId)
    {
        // Get the package with associated services
        $package = Package::with('services')->find($packageId);

        // You can also get additional details from the package_service table if needed
        $packageServices = PackageService::where('package_id', $packageId)->get();

        // Get selected services for the package (if any)
        $selectedServices = old('services', $package->services->pluck('id')->toArray());

        // Calculate total amount based on selected services
        $totalAmount = 0;

        foreach ($selectedServices as $serviceId) {
            $packageService = PackageService::where('service_id', $serviceId)->first();
            if ($packageService) {
                $totalAmount += $packageService->price - $packageService->discount;
            }
        }

        return view('Frontend.bookingphotographer.bookingform', compact('package', 'packageServices', 'selectedServices', 'totalAmount'));
    }


    public function storeBooking(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'remarks' => 'nullable|string',
            'date' => 'required|date',
            'services' => 'required|array',
        ]);

        // Calculate total amount based on selected services
        $selectedServices = $request->input('services');
        $totalAmount = 0;

        foreach ($selectedServices as $serviceId) {
            $service = Service::find($serviceId);
            $totalAmount += $service->price; // Assuming 'price' is the column name in the Service model
        }

        // Save the booking details
        $booking = new Booking([
            'user_id' => Auth::id(),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'remarks' => $request->input('remarks'),
            'date' => $request->input('date'),
            'total_amount' => $totalAmount,
        ]);

        $booking->save();

        // Save the selected services for the booking
        foreach ($selectedServices as $serviceId) {
            $packageService = PackageService::where('service_id', $serviceId)->first();

            $bookingService = new BookingService([
                'booking_id' => $booking->id,
                'package_service_id' => $packageService->id,
                'total_amount' => $packageService->price,
            ]);

            $bookingService->save();
        }

        // Redirect or return a response as needed
    }

}
