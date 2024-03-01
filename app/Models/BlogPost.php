<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable=['id','title','url','description','img','cover_img','is_active'];
}
 //<label for="tags" class="form-label">tags</label>
 <input id="tags" class="form-control" type="text" name="tags" value={{$photocontest->tags}}  >
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
         $photocontest = PhotoContest::get();
         $categories = Category::all();
         return view('admin.contest.photoscontest.index', compact('photocontest','categories'));
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

 }
