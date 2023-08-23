<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingformController extends Controller
{
    public function bookingform()
    {
         return view('Frontend.bookingphotographer.bookingform');
   }
}
