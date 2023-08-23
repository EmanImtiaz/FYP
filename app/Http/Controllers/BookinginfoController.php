<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookinginfoController extends Controller
{
    public function bookinginfo()
    {
         return view('Frontend.bookingphotographer.bookinginfo');
   }
}
