<?php

namespace App\Http\Controllers;

use App\Models\Town;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\City;

class TownController extends Controller
{
    public function create()
    {
       $town = new Town;
       $provinces = Province::get();
       $cities = City::get();
       return view('admin.location.town.create', compact('town', 'provinces', 'cities'));
    }

    public function index()
    {
        $towns = Town::get();
        return view('admin.location.town.index', compact('towns'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Town::create([
            'town_name' => $data['town_name'],
            'province_id' => $data['province_id'],
            'city_id' => $data['city_id'],
        ]);

        return redirect()->route('town.index');
    }

    public function edit($id)
    {
        $town = Town::find($id);
        $provinces = Province::get();
        $cities = City::get();
        return view('admin.location.town.create', compact('town', 'provinces', 'cities'));
    }

    public function update(Request $request, $id)
    {
        $town = Town::find($id);
        $data = $request->all();

        $town->update([
            'town_name' => $data['town_name'],
            'province_id' => $data['province_id'],
            'city_id' => $data['city_id'],
        ]);

        return redirect()->route('town.index');
    }

    public function delete(Request $request, $id)
    {
        $town = Town::find($id);
        $data = $request->all();

        $town->delete();
        return redirect()->route('town.index');
    }
}
