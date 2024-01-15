<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\PhotoContest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PhotosContestController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        $photocontest = new PhotoContest;
        return view('Frontend.contestform', compact('photocontest', 'categories'));
    }


    public function index()
    {
        $photocontest = PhotoContest::get();
        return view('admin.contest.photoscontest.index', compact('photocontest'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'description' => 'required',
            'views' => 'numeric',
            'tags' => 'nullable',
        ]);


        if($request->has('contest_img'))
        {
            $picture=$request->contest_img;
            $ext=$picture->getClientOriginalExtension();
            $file_name=time().'.'.$ext;
            $file_path='/assets/photoscontest/';
            $picture->move(public_path().$file_path,$file_name);

            $data['contest_img']=$file_path.$file_name;

        }
        $data['category_id'] = $request->input('category_id');
        $data['user_id'] = Auth::id();
        PhotoContest::create($data);
        return redirect()->route('photoscontest.index');
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
    public function view()
{
    $photocontest = PhotoContest::with('category')->where('user_id', auth()->id())->get();
    $categories = Category::all();

    return view('Frontend.contestform', compact('photocontest', 'categories'));
}
}
