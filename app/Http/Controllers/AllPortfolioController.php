<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllPortfolioController extends Controller
{
       public function allportfolio()
        {
           return view('Frontend.portfolio.allportfolio');
       }
}
