<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;


class MainController extends Controller
{
    public function main()
    {
        return view('Frontend.main');
    }
    public function index()
{
    $sliders = Slider::orderBy('priority')->get();
    return view('main', compact('sliders'));
}
}


