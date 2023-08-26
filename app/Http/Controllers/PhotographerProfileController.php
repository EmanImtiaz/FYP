<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotographerProfileController extends Controller
{
    public function photographerprofile()
    {
         return view('Frontend.portfolio.photographerprofile');
   }
}
