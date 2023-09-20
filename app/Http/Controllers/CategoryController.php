<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
       $category=new Category;
       return view('admin.contest.category.create',compact('category'));
    }

    public function index()
 {
    $category=Category::get();
    return view('admin.contest.category.index',compact('category'));
 }

 public function store(Request $request)
 {
    $data=$request->all();

if($request->has('img'))
{
    $picture=$request->img;
    $ext=$picture->getClientOriginalExtension();
    $file_name=time().'.'.$ext;
    $file_path='/assets/category/';
    $picture->move(public_path().$file_path,$file_name);

    $data['img']=$file_path.$file_name;
    Category::create($data);

    return redirect()->route('category.index');
 }
}

    public function edit($id)
{
   $category=Category::find($id);
   return view('admin.contest.category.create',compact('category'));
}


public function update(Request $request,$id)
{
    $category=Category::find($id);
   $data=$request->all();

  if($request->has('img'))
 {
   $picture=$request->img;
   $ext=$picture->getClientOriginalExtension();
   $file_name=time().'.'.$ext;
   $file_path='/assets/category/';
   $picture->move(public_path().$file_path,$file_name);

   $data['img']=$file_path.$file_name;

}
   $category->update($data);
   return redirect()->route('category.index');
}
   public function delete(Request $request,$id)
   {
     $category=Category::find($id);
     $data=$request->all();

     $category->delete();
     return redirect()->route('category.index');
   }
}
