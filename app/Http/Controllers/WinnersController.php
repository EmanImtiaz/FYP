<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WinnersController extends Controller
{
    public function winners ()
    {
        return view ('Frontend.contest.winners');
    }
}


