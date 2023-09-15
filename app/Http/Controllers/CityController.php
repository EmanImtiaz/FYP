<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Models\Province;

class CityController extends Controller
{
    public function create()
    {
       $city = new City;
       $provinces = Province::get();
       return view('admin.location.city.create', compact('city', 'provinces'));
    }

    public function index()
    {
        $cities = City::get();
        return view('admin.location.city.index', compact('cities'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        City::create($data);

        return redirect()->route('city.index');
    }

    public function edit($id)
    {
        $city = City::find($id);
        $provinces = Province::get();
        return view('admin.location.city.create', compact('city', 'provinces'));
    }

    public function update(Request $request, $id)
    {
        $city = City::find($id);
        $data = $request->all();

        $city->update($data);

        return redirect()->route('city.index');
    }

    public function delete(Request $request, $id)
    {
        $city = City::find($id);
        $data = $request->all();

        $city->delete();
        return redirect()->route('city.index');
    }
}
