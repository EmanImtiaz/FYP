<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigninController extends Controller
{

    public function signin ()
    {
        return view ('Frontend.Signin');

    }


}



public function becomePhotographer(Request $request)
{
    $user = Auth::user();

    $data = $request->validate([
        'documents' => 'required|mimes:pdf',
        'company_name' => 'required',
        'bio' => 'required',
        'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Load the photographerProfile relationship
    $photographerProfile = $user->photographerProfile;

    if (!$photographerProfile) {
        $photographerProfile = new PhotographerProfile();
        $photographerProfile->user_id = $user->id; // Set the user_id
        $user->photographerProfile()->save($photographerProfile);
    }

    if ($request->hasFile('logo')) {
        $image = $request->file('logo');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('logo'), $image_name);
        $path = "/logo/" . $image_name;

        // Update the PhotographerProfile model with the logo path
        $photographerProfile->logo = $path;
    }
    if ($request->hasFile('documents')) {
        $image = $request->file('documents');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('documents'), $image_name);
        $path = "/documents/" . $image_name;



        // Update the PhotographerProfile model with the documents path
        $photographerProfile->documents = $path;
    }
    // Update the 'company_name' field
    $photographerProfile->company_name = $request->input('company_name');

    // Update the 'bio' field
    $photographerProfile->bio = $request->input('bio');

    // Save the updated PhotographerProfile model
    $photographerProfile->save();

    return redirect()->route('Frontend.profile');
}



