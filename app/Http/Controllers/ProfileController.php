<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller

{
    public function show()
    {
        $user = auth()->user();
        return view('Frontend.profile', compact('user'));
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
}
