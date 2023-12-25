<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function create()
    {
        $services = new Service;
        return view('admin.company profile portion.services.create', compact('services'));
    }

    public function index()
 {
    $services=Service::get();
    return view('admin.company profile portion.services.index',compact('services'));
 }
 public function edit($id)
 {
     $services = Service::find($id);
     return view('admin.company profile portion.services.create', compact('services'));
 }

 public function store(Request $request)
 {
    $request->validate(['title'=>'required',
    'is_active'=>'required'],
    ['title.required'=>'Please enter title',
    'is_active.required'=>'Please enter is_active']);

    $data=$request->all();
    service::create($data);
    return redirect()->route('services.index');

    }


 public function update(Request $request,$id)
 {
     $service=Service::find($id);
    $data=$request->all();
  $service->update($data);
  return redirect()->route('services.index');

}
   public function delete(Request $request,$id)
   {
     $service=Service::find($id);
     $data=$request->all();

     $service->delete();
     return redirect()->route('services.index');
   }
}
