<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PhotographerProfile;

use App\Models\User;


use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        $photographerProfile = PhotographerProfile::where('user_id', $user->id)->first(); // Replace 'user_id' with your actual foreign key column name

        return view('Frontend.profile', compact('user', 'photographerProfile'));
    }

// profile edit view
public function edit_profile()
{
    $user = Auth::user();
    return view('Frontend.profile-edit', compact('user'));
}

public function update_profile(Request $request)
{
    $user = Auth::user();

    $request->validate([
        'profile_image' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        // Add validation rules for other fields (name, contact, address) here

    ]);
    if ($request->hasFile('profile_image')) {
        $image = $request->file('profile_image');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('users'), $image_name);
        $path = "/users/" . $image_name;

        // Save the image path to the user model
        $user->profile_image = $path;
    }

    // Update other user attributes
    $user->name = $request->input('name');
    $user->contact = $request->input('contact');
    $user->address = $request->input('address');

    // Save the updated user model to the database
    $user->save();

    return redirect()->route('Frontend.profile');
}

public function joinphotographer()
{
     return view('Frontend.users.joinphotographer');
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











}
