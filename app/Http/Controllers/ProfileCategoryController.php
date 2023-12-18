<?php

namespace App\Http\Controllers;

use App\Models\ProfileCategory;
use Illuminate\Http\Request;

class ProfileCategoryController extends Controller
{
    public function create()
    {
       $profilecategories=new ProfileCategory;
       return view('admin.PhotographerProfilePortfolio(work).category.create',compact('profilecategories'));
    }

    public function index()
 {
    $profilecategories=ProfileCategory::get();
    return view('admin.PhotographerProfilePortfolio(work).category.index',compact('profilecategories'));
 }
 public function edit($id)
 {
    $profilecategories=ProfileCategory::find($id);
    return view('admin.PhotographerProfilePortfolio(work).category.create',compact('profilecategories'));
 }
 public function store(Request $request)
 {
    $request->validate(['cat_name'=>'required'],
    ['cat_name.required'=>'Please enter cat_name']);

    $data=$request->all();
    ProfileCategory::create($data);
    return redirect()->route('profilecategory.index');

    }


 public function update(Request $request,$id)
 {
     $profilecategories=ProfileCategory::find($id);
    $data=$request->all();
  $profilecategories->update($data);
  return redirect()->route('profilecategory.index');

}
   public function delete(Request $request,$id)
   {
     $profilecategories=ProfileCategory::find($id);
     $data=$request->all();

     $profilecategories->delete();
     return redirect()->route('profilecategory.index');
   }
}

