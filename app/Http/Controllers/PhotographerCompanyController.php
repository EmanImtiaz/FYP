<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotographerCompanyController extends Controller
{
    public function index()
{
    // Show the user profile page
    return view('profile');
}

public function becomePhotographer(Request $request)
{
    // Validate the request
    $request->validate([
        'logo' => 'nullable|image',
        'company_name' => 'required',
        'bio' => 'required',
        'address' => 'required',
        'contact' => 'required',
    ]);

    // Store photographer data
    $user = Auth::user();
    $photographer = new Photographer($request->all());
    $user->photographer()->save($photographer);

    // Handle file upload if a logo is provided
    if ($request->hasFile('logo')) {
        $logoPath = $request->file('logo')->store('logos', 'public');
        $photographer->logo = $logoPath;
        $photographer->save();
    }

    return redirect('/profile')->with('success', 'You are now registered as a photographer.');
}
}
