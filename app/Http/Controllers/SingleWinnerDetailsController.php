<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleWinnerDetailsController extends Controller
{
    public function singlewinnerdetail()
     {
           return view('Frontend.contest.singlewinnerdetails');
    }
}
