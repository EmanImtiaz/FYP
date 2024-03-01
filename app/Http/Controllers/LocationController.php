<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\Town;
use App\Models\Province;
use App\Models\PhotographerProfile;
use Illuminate\Http\Request;

class LocationController extends Controller
{

    public function view(Request $request)
    {
        $provinces = Province::all();

        // Retrieve selected province, city, and town IDs from the request
        $provinceId = $request->input('province');
        $cityId = $request->input('city');
        $townId = $request->input('town');

        // Query to retrieve photographer profiles
        $query = PhotographerProfile::query();

        // If province ID is selected, filter by province
        if ($provinceId) {
            $query->whereHas('user.province', function ($q) use ($provinceId) {
                $q->where('id', $provinceId);
            });
        }

        // If city ID is selected, filter by city
        if ($cityId) {
            $query->whereHas('user.city', function ($q) use ($cityId) {
                $q->where('id', $cityId);
            });
        }

        // If town ID is selected, filter by town
        if ($townId) {
            $query->whereHas('user.town', function ($q) use ($townId) {
                $q->where('id', $townId);
            });
        }

        // Retrieve photographer profiles with filtered conditions
        $photographerProfiles = $query->with('user')->get();

        return view('Frontend.bookingphotographer.booking', compact('provinces', 'photographerProfiles'));
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

