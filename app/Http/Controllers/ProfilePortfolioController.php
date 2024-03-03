<?php

namespace App\Http\Controllers;

use App\Models\ProfilePortfolio;
use App\Models\ProfileCategory;
use App\Models\User;
use App\Models\PhotographerProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilePortfolioController extends Controller
{
    public function create()
{
    $profilecategories = ProfileCategory::all();
    $profileportfolio = new ProfilePortfolio();

    return view('Frontend.createprofileportfolio', compact('profilecategories', 'profileportfolio'));
}

    public function index()
    {
        $profileportfolios = ProfilePortfolio::with('category')->where('user_id', auth()->id())->get();
        $profilecategories = ProfileCategory::all();
        return view('admin.PhotographerProfilePortfolio(work).portfolio.index', compact('profileportfolios', 'profilecategories'));
    }

    public function store(Request $request)
{
    $request->validate([
        'profile_category_id' => 'required', // Ensure category exists
        'img' => 'required',

    ]);

    $data = [];

    // Your image upload logic
    if ($request->has('img')) {
        $picture = $request->img;
        $ext = $picture->getClientOriginalExtension();
        $file_name = time() . '.' . $ext;
        $file_path = '/assets/profileportfolio/';
        $picture->move(public_path() . $file_path, $file_name);

        $data['img'] = $file_path . $file_name;
    }

    $data['profile_category_id'] = $request->input('profile_category_id');
    $data['user_id'] = Auth::id();

    ProfilePortfolio::create($data);

    return redirect()->route('Frontend.profile');
}

public function edit($id)
{
    $profilecategories = ProfileCategory::all();
    $profileportfolio = ProfilePortfolio::find($id);

    return view('Frontend.createprofileportfolio', compact('profilecategories', 'profileportfolio'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'profile_category_id' => 'required',
        'img' => 'required',
    ]);

    $profileportfolio = ProfilePortfolio::find($id);

    $data = [];

    if ($request->has('img')) {
        $picture = $request->img;
        $ext = $picture->getClientOriginalExtension();
        $file_name = time() . '.' . $ext;
        $file_path = '/assets/profileportfolio/';
        $picture->move(public_path() . $file_path, $file_name);

        $data['img'] = $file_path . $file_name;
    }

    $data['profile_category_id'] = $request->input('profile_category_id');
    $data['user_id'] = Auth::id();

    $profileportfolio->update($data);

    return redirect()->route('profileportfolio.index');
}

public function delete(Request $request, $id)
{
    $profileportfolio = ProfilePortfolio::find($id);

    $data=$request->all();
    $profileportfolio->delete();

    return redirect()->route('profileportfolio.index');

}


public function viewss()
{
    // Fetch profile portfolios based on the authenticated user's ID
    $profileportfolios = ProfilePortfolio::with('category')
        ->where('user_id', auth()->id())
        ->get();

    // Pass the fetched profile portfolios to the view
    return view('Frontend.profileportfolioview', compact('profileportfolios'));
}

public function view($id)
{
    $user = User::find($id); // Fetch the photographer data
    $profileportfolios = ProfilePortfolio::with('category')->where('user_id', $id)->get();
    $profilecategories = ProfileCategory::all();

    return view('Frontend.profileportfolioview', compact('profileportfolios', 'profilecategories','user'));
}

}

