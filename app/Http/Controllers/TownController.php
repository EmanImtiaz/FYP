<?php

namespace App\Http\Controllers;

use App\Models\Town;
use Illuminate\Http\Request;

class TownController extends Controller
{
    public function create()
    {
       $town=new Town;
       return view('admin.location.town.create',compact('town'));
    }

    public function index()
 {
    $town=Town::get();
    return view('admin.location.town.index',compact('town'));
 }

 public function store(Request $request)
 {
    $data=$request->all();

    Town::create($data);

    return redirect()->route('town.index');
 }

    public function edit($id)
{
   $town=Town::find($id);
   return view('admin.location.town.create',compact('town'));
}


public function update(Request $request,$id)
{
    $town=Town::find($id);
   $data=$request->all();

   $town->update($data);
   return redirect()->route('town.index');
}
   public function delete(Request $request,$id)
   {
     $town=Town::find($id);
     $data=$request->all();

     $town->delete();
     return redirect()->route('town.index');
   }
}
