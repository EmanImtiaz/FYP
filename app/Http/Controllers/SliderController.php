<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function create()
    {
       $slider=new Slider;
       return view('admin.slider.create',compact('slider'));
    }

    public function index()
 {
    $slider=Slider::get();
    return view('admin.slider.index',compact('slider'));
 }

 public function store(Request $request)
 {
    $data=$request->all();

if($request->has('img'))
{
    $picture=$request->img;
    $ext=$picture->getClientOriginalExtension();
    $file_name=time().'.'.$ext;
    $file_path='/assets/slider/';
    $picture->move(public_path().$file_path,$file_name);

    $data['img']=$file_path.$file_name;
    Slider::create($data);

    return redirect()->route('slider.index');
 }

}
    public function edit($id)
{
   $slider=Slider::find($id);
   return view('admin.slider.create',compact('slider'));
}

public function update(Request $request,$id)
{
    $slider=Slider::find($id);
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
   $slider->update($data);
   return redirect()->route('slider.index');
}
   public function delete(Request $request,$id)
   {
     $slider=Slider::find($id);
     $data=$request->all();

     $slider->delete();
     return redirect()->route('slider.index');
   }
}









































