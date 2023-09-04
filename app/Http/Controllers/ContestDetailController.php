<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContestDetailController extends Controller
{
    public function contestdetail()
    {
         return view('Frontend.contest.contestdetail');
   }
}
