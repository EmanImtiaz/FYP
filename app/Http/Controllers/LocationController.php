<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\Town;
use App\Models\Province;
use App\Models\PhotographerProfile;
use Illuminate\Http\Request;

class LocationController extends Controller
{

    public function view()
    {
        $photographerProfiles = PhotographerProfile::with('user')->get();
        $provinces = Province::all();
        return view('Frontend.bookingphotographer.booking', compact('provinces','photographerProfiles'));
    }
    public function getCities(Request $request)
    {
        $provinceId = $request->input('province_id');
        $cities = City::where('province_id', $provinceId)->get();

        return response()->json(['cities' => $cities]);
    }

    public function getTowns(Request $request)
    {
        $cityId = $request->input('city_id');
        $towns = Town::where('city_id', $cityId)->get();

        return response()->json(['towns' => $towns]);
    }

    
}
