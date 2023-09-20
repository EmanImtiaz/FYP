<?php

namespace App\Http\Controllers;
use App\Models\PhotosContest;
use Illuminate\Http\Request;

class PhotosContestController extends Controller
{
    public function create()
    {
       $photoscontest=new PhotosContest;
       return view('admin.contest.photoscontest.create',compact('photoscontest'));
    }

    public function index()
 {
    $photoscontest=PhotosContest::get();
    return view('admin.contest.photoscontest.index',compact('photoscontest'));
 }

 public function store(Request $request)
 {
    $data=$request->all();

if($request->has('contest_img'))
{
    $picture=$request->contest_img;
    $ext=$picture->getClientOriginalExtension();
    $file_name=time().'.'.$ext;
    $file_path='/assets/photoscontest/';
    $picture->move(public_path().$file_path,$file_name);

    $data['contest_img']=$file_path.$file_name;
 }

 if($request->has('profile_img'))
 {
     $picture=$request->profile_img;
     $ext=$picture->getClientOriginalExtension();
     $file_name=time().'.'.$ext;
     $file_path='/assets/photoscontest/';
     $picture->move(public_path().$file_path,$file_name);

     $data['profile_img']=$file_path.$file_name;

  }
     PhotosContest::create($data);

     return redirect()->route('photoscontest.index');
 }


     public function edit($id)
 {
    $photoscontest=PhotosContest::find($id);
    return view('admin.contest.photoscontest.create',compact('photoscontest'));
 }
 public function update(Request $request,$id)
 {
     $photoscontest=PhotosContest::find($id);
    $data=$request->all();

    if($request->has('contest_img'))
    {
        $picture=$request->contest_img;
        $ext=$picture->getClientOriginalExtension();
        $file_name=time().'.'.$ext;
        $file_path='/assets/photoscontest/';
        $picture->move(public_path().$file_path,$file_name);

        $data['contest_img']=$file_path.$file_name;
     }

     if($request->has('profile_img'))
    {
        $picture=$request->profile_img;
        $ext=$picture->getClientOriginalExtension();
        $file_name=time().'.'.$ext;
        $file_path='/assets/photoscontest/';
        $picture->move(public_path().$file_path,$file_name);

        $data['profile_img']=$file_path.$file_name;

     }
     $photoscontest->update($data);
     return redirect()->route('photoscontest.index');
  }
     public function delete(Request $request,$id)
     {
       $photoscontest=PhotosContest::find($id);
       $data=$request->all();

       $photoscontest->delete();
       return redirect()->route('photoscontest.index');
}
  }
