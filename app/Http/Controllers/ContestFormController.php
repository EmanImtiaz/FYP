<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContestFormController extends Controller
{
    public function formcontest()  {
return view('Frontend.contest.formcontest');
    }
}
