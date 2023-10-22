<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
<<<<<<< Updated upstream
    public function profile ()
    {
        return view ('Frontend.portfolio.photographerprofile');
    }
=======
    public function profile()
{
    $user = auth()->user();
    return view('Frontend.profile', compact('user'));
}

>>>>>>> Stashed changes
}
