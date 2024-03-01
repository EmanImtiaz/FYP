<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\Town;
use App\Models\Province;
use App\Models\PhotographerProfile;
use Illuminate\Http\Request;

class LocationController extends Controller
{

    public function view()
    {
        $photographerProfiles = PhotographerProfile::with('user')->get();
        $provinces = Province::all();
        return view('Frontend.bookingphotographer.booking', compact('provinces','photographerProfiles'));
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

    
}



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
        $photocontest = new PhotoContest();
        return view('Frontend.contestform', compact('photocontest', 'categories'));
    }

    public function index()
    {
        $photocontests = PhotoContest::get(); // Retrieve all photo contests
        $categories = Category::all();
        return view('Frontend.contest.contestdetail', compact('photocontests', 'categories')); // Pass data to the view
    }


    public function store(Request $request)
    {
         // Ensure the user is authenticated
         $this->middleware('auth');
        $data = $request->validate([
            'description' => 'required',
            'views' => 'numeric',
            'tags' => 'nullable',
            'category_id' => 'required',
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

    public function view()
{
         // Ensure the user is authenticated
         $this->middleware('auth');

         $photocontest = PhotoContest::with('category')->where('user_id', auth()->id())->get();
         $categories = Category::all();

         return view('Frontend.contestform', compact('photocontest', 'categories'));
}
public function show($id)
{
    $photocontest = PhotoContest::findOrFail($id);
    $photocontest->increment('views'); // Increment the views count in the database
    return view('Frontend.contest.show', compact('photocontest'));
}
}
