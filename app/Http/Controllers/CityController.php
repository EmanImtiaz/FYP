<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function create()
    {
       $city=new City;
       return view('admin.location.city.create',compact('city'));
    }

    public function index()
 {
    $city=City::get();
    return view('admin.location.city.index',compact('city'));
 }

 public function store(Request $request)
 {
    $data=$request->all();

 // if($request->has('img'))
// {
 //   $picture=$request->img;
 //   $ext=$picture->getClientOriginalExtension();
 //   $file_name=time().'.'.$ext;
  //  $file_path='/assets/slider/';
  //  $picture->move(public_path().$file_path,$file_name);

  //  $data['img']=$file_path.$file_name;
  City::create($data);

    return redirect()->route('city.index');
 }


    public function edit($id)
{
   $city=City::find($id);
   return view('admin.location.city.create',compact('city'));
}

public function update(Request $request,$id)
{
    $city=City::find($id);
   $data=$request->all();

// if($request->has('img'))
//  {
//   $picture=$request->img;
 //  $ext=$picture->getClientOriginalExtension();
 //  $file_name=time().'.'.$ext;
 //  $file_path='/assets/slider/';
 //  $picture->move(public_path().$file_path,$file_name);

 //  $data['img']=$file_path.$file_name;

// }
   $city->update($data);
   return redirect()->route('city.index');
}
   public function delete(Request $request,$id)
   {
     $city=City::find($id);
     $data=$request->all();

     $city->delete();
     return redirect()->route('city.index');
   }
}
