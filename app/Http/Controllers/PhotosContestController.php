<?php

namespace App\Http\Controllers;

use App\Models\PhotoContest;
use Illuminate\Http\Request;

class PhotosContestController extends Controller
{
    public function create()
    {
        $photocontest = new PhotoContest;
        return view('admin.contest.photoscontest.create', compact('photocontest'));
    }

    public function index()
    {
        $photocontest = PhotoContest::get();
        return view('admin.contest.photoscontest.index', compact('photocontest'));
    }

    public function store(Request $request)
    {
        // Validate input data
        $request->validate([
            'description' => 'required',
            'views' => 'numeric',
            'tags' => 'nullable',
            'contest_img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

    //    $data = array_merge($request->all(), $validatedData);

        // Handle image upload
        if ($request->hasFile('contest_img')) {
            $picture = $request->file('contest_img');
            $ext = $picture->getClientOriginalExtension();
            $file_name = time() . '.' . $ext;
            $file_path = '/assets/photoscontest/';
            $picture->move(public_path() . $file_path, $file_name);

            $data['contest_img'] = $file_path . $file_name;
        }

        // Create a new PhotoContest record
        PhotoContest::create($data);

        return redirect()->route('photocontest.index');
    }

    public function edit($id)
    {
        $photocontest = PhotoContest::find($id);
        return view('admin.contest.photoscontest.create', compact('photocontest'));
    }

    public function update(Request $request, $id)
    {
        // Validate input data
        $validatedData = $request->validate([
            'description' => 'required|string',
            'views' => 'numeric', // Add validation for 'views' field
            'tags' => 'nullable|string|max:255', // Add validation for 'tags' field
            'contest_img' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Example validation for an image upload
            // Add other validation rules for other fields
        ]);

        $data = array_merge($request->all(), $validatedData);

        // Handle image upload
        if ($request->hasFile('contest_img')) {
            $picture = $request->file('contest_img');
            $ext = $picture->getClientOriginalExtension();
            $file_name = time() . '.' . $ext;
            $file_path = '/assets/photoscontest/';
            $picture->move(public_path() . $file_path, $file_name);

            $data['contest_img'] = $file_path . $file_name;
        }

        // Update the PhotoContest record
        $photocontest = PhotoContest::find($id);
        $photocontest->update($data);

        return redirect()->route('photocontest.index');
    }

    public function delete(Request $request, $id)
    {
        $photocontest = PhotoContest::find($id);
        $photocontest->delete();

        return redirect()->route('photocontest.index');
    }
}
