<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\PhotoContest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PhotosContestController extends Controller
{


    public function index()
    {
        $photocontests = PhotoContest::get(); // Retrieve all photo contests
        $categories = Category::all();
        return view('admin.contest.photoscontest.index', compact('photocontests', 'categories')); // Pass data to the view
    }

 //   public function __construct()
  //  {
        // Apply authentication middleware
  //      $this->middleware('auth');
 //   }

    public function create()
    {
        $categories = Category::all();
        $photocontest = new PhotoContest();
        return view('Frontend.contestform', compact('photocontest', 'categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'description' => 'required',
            'tags' => 'nullable',
            'category_id' => 'required',
            'contest_img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Set the views count to 0
        $data['views'] = 0;

        if ($request->hasFile('contest_img')) {
            $picture = $request->file('contest_img');
            $file_name = time() . '.' . $picture->getClientOriginalExtension();
            $file_path = '/assets/photoscontest/';
            $picture->move(public_path() . $file_path, $file_name);
            $data['contest_img'] = $file_path . $file_name;
        }

        // Assign user ID
        $data['user_id'] = Auth::id();

        PhotoContest::create($data);

        // Redirect to the explorephotocontest route
        return redirect()->route('explorephotocontest');
    }


    public function edit($id)
    {
        $categories = Category::all();
        $photocontest = PhotoContest::find($id);
        return view('admin.contest.photoscontest.create', compact('categories','photocontest'));
    }

    public function update(Request $request, $id)
    {
        // Validate input data
        $validatedData = $request->validate([
            'description' => 'required|string',
            'views' => 'numeric',
            'tags' => 'nullable|string|max:255',
            'contest_img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required',
        ]);

        $photocontest = PhotoContest::find($id);

        $data = [];

        // Handle image upload
        if ($request->hasFile('contest_img')) {
            $picture = $request->file('contest_img');
            $ext = $picture->getClientOriginalExtension();
            $file_name = time() . '.' . $ext;
            $file_path = '/assets/photoscontest/';
            $picture->move(public_path() . $file_path, $file_name);

            $data['contest_img'] = $file_path . $file_name;
        }


        $data['category_id'] = $request->input('category_id');
        $data['user_id'] = Auth::id();

        $photocontest->update($data);

        return redirect()->route('photocontest.index');
    }

    public function delete(Request $request, $id)
    {
        $photocontest = PhotoContest::find($id);

        $data=$request->all();
        $photocontest->delete();

        return redirect()->route('photocontest.index');

    }


    public function view($categoryId)
    {


        // Retrieve photo contests for the specified category and current user
        $photocontests = PhotoContest::with('category')

            ->where('category_id', $categoryId)
            ->get();

        $category = Category::findOrFail($categoryId); // Retrieve the category

        $categories = Category::all();

        return view('Frontend.contest.contestdetail', compact('photocontests', 'categories', 'category'));
    }




}






