<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Package;
use App\Models\PackageService;
use App\Models\PhotographerProfile;
use App\Models\City;
use App\Models\Town;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        $photographerProfile = PhotographerProfile::where('user_id', $user->id)->first();

        if ($user->role == 'photographer') {
            // Load unique packages with services
            $packages = PackageService::where('user_id', $user->id)
                ->with('package.services') // Eager load relationships
                ->get();

            return view('Frontend.profile', compact('user', 'photographerProfile', 'packages'));
        } else {
            // Handle users without the photographer role
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
    $provinces = Province::all();
    return view('Frontend.profile-edit', compact('user','provinces'));
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
    $user->province_id = $request->input('province_id');
    $user->city_id = $request->input('city_id');
    $user->town_id = $request->input('town_id');

    // Save the updated user model to the database
    $user->save();

    return redirect()->route('Frontend.profile');
}


public function joinphotographer()
{
    $user = Auth::user();
    $photographerProfile = $user->photographerProfile;

    // Check if the user has applied as a photographer
    $isApplied = $photographerProfile && !$photographerProfile->approved;

    // Check if the user is already a photographer
    $isPhotographer = $photographerProfile && $photographerProfile->approved;

    return view('Frontend.users.joinphotographer', compact('user', 'photographerProfile', 'isApplied', 'isPhotographer'));
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
        'logo' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
    ]);

    // Check if photographer profile exists for the user
    if ($user->photographerProfile) {
        // Update the existing photographer profile
        $photographerProfile = $user->photographerProfile;
    } else {
       // Create a new photographer profile
       $photographerProfile = new PhotographerProfile();
       $photographerProfile->user_id = $user->id; // Assign user ID to the photographer profile
    }

    if ($request->hasFile('documents')) {
        $document = $request->file('documents');
        $documentPath = $document->store('public/assets/documents/user_' . $user->id);
        $data['document_path'] = $documentPath;
    }

    if ($request->hasFile('logo')) {
        $image = $request->file('logo');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('photographerprofiles'), $image_name);
        $path = "/photographerprofiles/" . $image_name;

        // Save the image path to the photographer profile
        $photographerProfile->logo = $path;
    }

    // Fill the photographer profile with data
    $photographerProfile->fill($data);

    // Save or update the photographer profile
    $photographerProfile->save();

    // Do not update user role here; let admin approval handle it

    return redirect()->route('Frontend.profile')->with('success', 'You have applied as a photographer. Your profile is pending approval.');
}

public function approvePhotographerProfile($id)
{
    $photographerProfile = PhotographerProfile::find($id);
        $photographerProfile->update(['approved' => true]);

        // Update user role to 'photographer' upon approval
        $photographerProfile->user->update(['role' => 'photographer']);

        return redirect()->route('photogrpherprofile.index')->with('success', 'Photographer profile approved.');
}

public function disapprovePhotographerProfile($id)
{
    $photographerProfile = PhotographerProfile::find($id);
    $photographerProfile->update(['approved' => false]);

    // Update user role to 'user' upon disapproval
    $photographerProfile->user->update(['role' => 'user']);

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

    $request->validate([
        'documents' => 'required|mimes:pdf',
        'company_name' => 'required',
        'bio' => 'required',
        'logo' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
    ]);

    if ($request->hasFile('documents')) {
        $document = $request->file('documents');
        $documentPath = $document->store('public/assets/documents/user_' . $user->id);
        $photographerProfile->documents = $documentPath; // Assign the document path to the photographer profile
    }

    if ($request->hasFile('logo')) {
        $image = $request->file('logo');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('photographerprofiles'), $image_name);
        $path = "/photographerprofiles/" . $image_name;

        // Save the image path to the photographer profile
        $photographerProfile->logo = $path;
    }

    // Update other photographer profile attributes
    $photographerProfile->company_name = $request->input('company_name');
    $photographerProfile->bio = $request->input('bio');

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



public function show($id)
{
    $photographerProfile = PhotographerProfile::findOrFail($id);
    $user = User::findOrFail($photographerProfile->user_id); // Fetch the associated user
    $packages = PackageService::where('user_id', $user->id)
    ->with('package.services') // Eager load relationships
    ->get();

    return view('Frontend.profile', compact('photographerProfile', 'user','packages'));
}




}

