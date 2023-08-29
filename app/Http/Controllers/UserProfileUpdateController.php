<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileUpdateController extends Controller
{
    public function userprofileupdate ()
    {
        return view ('Frontend.portfolio.userprofileupdate');
    }
}
