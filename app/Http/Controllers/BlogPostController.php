<?php

namespace App\Http\Controllers;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogPostController extends Controller
{
    public function create()
    {
       $blogpost=new BlogPost;
       return view('admin.blog.create',compact('blogpost'));
    }
    public function index()
    {
        $blogpost = BlogPost::all();
        return view('admin.blog.index', compact('blogpost'));
    }
    public function show()
    {
        $blogpost = BlogPost::where('is_active', 1)->get();
       return view('Frontend.blog.blog',compact('blogpost'));
    }
    public function blogdetail($id)
    {
        $blogpost = BlogPost::find($id);

        return view('Frontend.blog.blogdetail', compact('blogpost'));
    }

 public function edit($id)
 {
    $blogpost=BlogPost::find($id);
    return view('admin.blog.create',compact('blogpost'));
 }
 public function store(Request $request)
 {
    $request->validate(['title'=>'required',
    'is_active'=>'required',
    'description'=>'required'],
    ['title.required'=>'Please enter title',
    'description.required'=>'Please enter description']);

    $data=$request->all();

    if($request->has('img'))
    {
        $picture=$request->img;
        $ext=$picture->getClientOriginalExtension();
        $file_name=time().'.'.$ext;
        $file_path='/assets/slider/';
        $picture->move(public_path().$file_path,$file_name);

        $data['img']=$file_path.$file_name;

     }
     if($request->has('cover_img'))
     {
         $picture=$request->cover_img;
         $ext=$picture->getClientOriginalExtension();
         $file_name=time().'.'.$ext;
         $file_path='/assets/blogpost/';
         $picture->move(public_path().$file_path,$file_name);

         $data['cover_img']=$file_path.$file_name;
     }
     BlogPost::create($data);

        return redirect()->route('blogpost.index');

    }


 public function update(Request $request,$id)
 {
     $blogpost=BlogPost::find($id);
    $data=$request->all();

    if($request->has('img'))
    {
        $picture=$request->img;
        $ext=$picture->getClientOriginalExtension();
        $file_name=time().'.'.$ext;
        $file_path='/assets/blogpost/';
        $picture->move(public_path().$file_path,$file_name);

        $data['img']=$file_path.$file_name;
 }
 if($request->has('cover_img'))
 {
     $picture=$request->cover_img;
     $ext=$picture->getClientOriginalExtension();
     $file_name=time().'.'.$ext;
     $file_path='/assets/blogpost/';
     $picture->move(public_path().$file_path,$file_name);

     $data['cover_img']=$file_path.$file_name;
 }
  $blogpost->update($data);
  return redirect()->route('blogpost.index');

}
     public function delete(Request $request,$id)
     {
       $blogpost=BlogPost::find($id);
       $data=$request->all();

       $blogpost->delete();
       return redirect()->route('blogpost.index');
}


}
