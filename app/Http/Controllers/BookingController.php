<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking()
    
    {
         return view('Frontend.bookingphotographer.booking');
   }
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'services' => 'required|array',
            'totalAmount' => 'required|numeric',
            'selected_date' => 'required|date', // Add validation for the date field
            // Add any additional validation rules for your form fields
        ]);

        // Create a new booking instance and fill it with the validated data
        $booking = new Booking;
        $booking->name = $validatedData['name'];
        $booking->email = $validatedData['email'];
        $booking->phone = $validatedData['phone'];
        $booking->address = $validatedData['address'];
        $booking->services = implode(', ', $validatedData['services']);
        $booking->total_amount = $validatedData['totalAmount'];
        $booking->date = $validatedData['date']; // Save the selected date

        // Save the booking to the database
        $booking->save();

        // You can redirect the user to the index page or any other page after saving the data
        return redirect()->route('booking.index')->with('success', 'Booking created successfully');
    }

}
