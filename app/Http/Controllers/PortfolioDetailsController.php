<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioDetailsController extends Controller
{
    public function portfoliodetails()
     {
         return view('Frontend.portfoliodetails');
    }
}
