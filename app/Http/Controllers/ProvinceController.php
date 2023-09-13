<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function create()
    {

       return view('admin.location.province.create');
    }

    public function index()
 {
    $province=Province::get();
    return view('admin.location.province.index',compact('province'));
 }

 public function store(Request $request)
 {
    $data=$request->all();

 if($request->has('img'))
 {
  $picture=$request->img;
    $ext=$picture->getClientOriginalExtension();
    $file_name=time().'.'.$ext;
    $file_path='/assets/province/';
    $picture->move(public_path().$file_path,$file_name);

    $data['img']=$file_path.$file_name;
    Province::create($data);

    return redirect()->route('province.index');
 }

}
    public function edit($id)
{
   $province=Province::find($id);
   return view('admin.location.province.create',compact('province'));
}

public function update(Request $request,$id)
{
    $province=Province::find($id);
   $data=$request->all();

if($request->has('img'))
{
   $picture=$request->img;
   $ext=$picture->getClientOriginalExtension();
   $file_name=time().'.'.$ext;
   $file_path='/assets/province/';
   $picture->move(public_path().$file_path,$file_name);

   $data['img']=$file_path.$file_name;

}
   $province->update($data);
   return redirect()->route('province.index');
}
   public function delete(Request $request,$id)
   {
     $province=Province::find($id);
     $data=$request->all();

     $province->delete();
     return redirect()->route('.index');
   }
}


