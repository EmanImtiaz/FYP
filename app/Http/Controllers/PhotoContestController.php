<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoContestController extends Controller
{
    public function photocontest()
     {
          return view('Frontend.contest.photocontest');
    }
}
