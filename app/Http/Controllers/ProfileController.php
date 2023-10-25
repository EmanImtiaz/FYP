<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PhotographerProfile;
use App\Models\Profile;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show()
    {
        $user = auth()->user();
        $photographerProfile = $user->photographerProfile;
        return view('Frontend.profile', compact('user', 'photographerProfile'));
    }

    public function edit()
    {
        $user = auth()->user();
        return view('Frontend.portfolio.userprofileupdate', compact('user'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();
        $user->update($request->only(['name', 'address', 'contact']));
        return redirect()->route('Frontend.profile');
    }

    // Profile picture methods//
    public function uploadImage(Request $request)
{
    $user = auth()->user();

    // Ensure that the user has a profile
    if (!$user->profiles) {
        $user->profiles()->create(['profile_image' => null]);
    }

    // Validate and store the uploaded profile picture
    $request->validate([
        'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // You can customize the validation rules
    ]);

    $path = $request->file('profile_image')->store('profile_images', 'public');

    // Update the user's profile_picture field with the new path
    $user->profiles->update(['profile_image' => $path]);

    return redirect()->route('Frontend.profile')->with('success', 'Profile picture uploaded successfully.');
}

// photographer profile
    public function showPhotographerRegistrationForm()
    {
        return view('Frontend.users.joinphotographer');
    }

    public function becomePhotographer(Request $request)
    {
        $user = Auth::user();

        $data = $request->validate([
            'documents' => 'required|mimes:pdf',
            'company_name' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'bio' => 'required',
        ]);

        // Handle file upload for documents (PDF)...

        $photographerProfile = $user->photographerProfile;

        if ($photographerProfile) {
            $photographerProfile->update($data);
        } else {
            $user->photographerProfile()->create($data);
        }

        return redirect()->route('Frontend.profile')->with('success', 'You are now registered as a photographer.');
    }
}
