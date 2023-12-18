<?php

namespace App\Http\Controllers;

use App\Models\ProfilePortfolio;
use App\Models\ProfileCategory;
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
        'img' => 'required',
        'category_id' => 'required', // Ensure category exists
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

    $data['category_id'] = $request->input('category_id');
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
        'category_id' => 'required',
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

    $data['category_id'] = $request->input('category_id');
    $data['user_id'] = Auth::id();

    $profileportfolio->update($data);

    return redirect()->route('profileportfolio.index');
}

public function delete(Request $request, $id)
{
    $profileportfolio = ProfilePortfolio::find($id);

    // Delete the image file
    if (file_exists(public_path($profileportfolio->img))) {
        unlink(public_path($profileportfolio->img));
    }

    $profileportfolio->delete();

    return redirect()->route('profileportfolio.index');
}

}

