<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JoinController extends Controller
{
    public function join ()
    {
        return view ('Frontend.userjoin.join');

    }
}
