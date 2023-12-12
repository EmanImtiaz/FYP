<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function create()
    {
       $services=new Services;
       return view('admin.company profile portion.services.create',compact('services'));
    }

    public function index()
 {
    $services=Services::get();
    return view('admin.company profile portion.services.index',compact('services'));
 }
 public function edit($id)
 {
    $services=Services::find($id);
    return view('admin.company profile portion.services.create',compact('services'));
 }
 public function store(Request $request)
 {
    $request->validate(['title'=>'required',
    'is_active'=>'required'],
    ['title.required'=>'Please enter title',
    'is_active.required'=>'Please enter is_active']);

    $data=$request->all();
    services::create($data);
    return redirect()->route('services.index');

    }


 public function update(Request $request,$id)
 {
     $services=Services::find($id);
    $data=$request->all();
  $services->update($data);
  return redirect()->route('services.index');

}
   public function delete(Request $request,$id)
   {
     $services=Services::find($id);
     $data=$request->all();

     $services->delete();
     return redirect()->route('services.index');
   }
}
