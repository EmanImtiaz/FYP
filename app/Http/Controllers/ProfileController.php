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
        $photographerProfile = PhotographerProfile::where('user_id', $user->id)->first();
        if ($photographerProfile) {
        return view('Frontend.profile', compact('user', 'photographerProfile'));
    }
    else
    {
        return view('Frontend.profile', compact('user', 'photographerProfile'));
    }
}
//admin panel user table//
public function userindex()
{
   $user=user::get();
   return view('admin.Users.userprofile.index',compact('user'));
}
//admin panel photographerprofile//
public function photographerindex()
{
   $photographerProfile=PhotographerProfile::get();
   return view('admin.Users.Company registration.index',compact('photographerProfile'));
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
    $user = Auth::user(); 

    // Check if the user is already a photographer
    $photographerProfile = $user->photographerProfile;

    // Check if the photographer profile is approved
    $isApproved = $photographerProfile && $photographerProfile->isApproved();

    return view('Frontend.users.joinphotographer', compact('user', 'photographerProfile', 'isApproved'));
}

public function becomePhotographer(Request $request)
{
    $user = Auth::user();

    if (!$user) {
        return redirect()->route('login');
    }
    $data = $request->validate([
        'documents' => 'required|mimes:pdf',
        'company_name' => 'required',
        'bio' => 'required',
        'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Adjust the image validation rules as needed.
    ]);

    if ($request->hasFile('documents')) {
        $document = $request->file('documents');
        $documentPath = $document->store('public/assets/documents/user_' . $user->id);
        $data['document_path'] = $documentPath;
    }

    if ($request->hasFile('logo')) {
        $logo = $request->file('logo');
        $logoPath = $logo->store('public/assets/logo');
        $data['logo_path'] = $logoPath;
    }
    if ($user->photographerProfile) {
        $user->photographerProfile->update($data);
    } else {
        $photographerProfile = new PhotographerProfile($data);
        $user->photographerProfile()->save($photographerProfile);
    }


    return redirect()->route('Frontend.profile')->with('success', 'You are now registered as a photographer.');
}
public function approvePhotographerProfile($id)
{
    $photographerProfile = PhotographerProfile::find($id);
    $photographerProfile->update(['approved' => true]);

    return redirect()->route('photogrpherprofile.index')->with('success', 'Photographer profile approved.');
}

public function disapprovePhotographerProfile($id)
{
    $photographerProfile = PhotographerProfile::find($id);
    $photographerProfile->update(['approved' => false]);

    return redirect()->route('photogrpherprofile.index')->with('success', 'Photographer profile disapproved.');
}

public function detail_updatee(Request $request)
{
    $user = Auth::user();

    // Fetch or create the photographer profile associated with the user
    $photographerProfile = PhotographerProfile::where('user_id', $user->id)->first();
    if (!$photographerProfile) {
        $photographerProfile = new PhotographerProfile();
        $photographerProfile->user_id = $user->id;
    }

    // Update other user attributes
    $photographerProfile->logo = $request->input('logo');
    $photographerProfile->companyname = $request->input('companyname');
    $photographerProfile->bio = $request->input('bio');
    $photographerProfile->documents = $request->input('documents');

    // Save the updated photographer profile to the database
    $photographerProfile->save();

    return redirect()->route('Frontend.profile');
}

public function detail_edit()
{
    $user = Auth::user();
    $photographerProfile = $user->photographerProfile;
    return view('Frontend.detail-edit', compact('photographerProfile'));
}

}

