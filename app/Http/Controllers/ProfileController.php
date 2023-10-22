<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller

{
    public function profile()
    {
        $user = auth()->user();
        return view('Frontend.profile', compact('user'));
    }

    public function show()
    {
        $user = Auth::user();
        return view('Frontend.profile', compact('user'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        ]);

        if ($request->hasFile('profile_image')) {
            $path = $request->file('profile_image')->store('profile_images', 'public');
            Auth::user()->update(['profile_image' => $path]);
        }

        return redirect()->back()->with('success', 'Profile picture uploaded successfully.');
    }
}
