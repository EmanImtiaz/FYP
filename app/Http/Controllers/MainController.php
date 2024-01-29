<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\PhotographerProfile;


class MainController extends Controller
{
    public function main()
    {
        $sliders = Slider::orderBy('priority')->get();
        $photographerProfiles = PhotographerProfile::with('user')->get();
        return view('Frontend.main',compact('sliders','photographerProfiles'));
    }

   // public function index()
// {
 //   $sliders = Slider::orderBy('priority', 'asc')->get();
 //   return view('main', compact('sliders'));
  //  return view('main')->with('sliders', $sliders);

// }

// public function index()
// {
    // Fetch sliders ordered by priority
//    $sliders = Slider::orderBy('priority', 'asc')->get();

    // Pass the sliders to the home page view
 //   return view('home', compact('sliders'));
// }

}

