<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Service;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function create()
    {
       $package=new Package;
       $service = Service::all(); // Fetch all services
       return view('admin.company profile portion.Packages.create',compact('package','service'));
    }

    public function index()
 {
    $package=Package::get();
    return view('admin.company profile portion.Packages.index',compact('package'));
 }
 public function edit($id)
 {
    $package=Package::find($id);
    return view('admin.company profile portion.Packages.create',compact('package'));
 }
 public function store(Request $request)
 {
    $request->validate(['title'=>'required',
    'price'=>'required',
    'is_active'=>'required'],
    ['title.required'=>'Please enter title',
    'price.required'=>'Please enter price']);

    $data=$request->all();
 //   $package_id=packages::create($data)->id;


    $package = Package::create($data);
    $package_id = $package->id; // Get the package ID

      // Attach services to the package
      if ($request->has('service')) {
        foreach ($request->input('service') as $serviceId) {
            $package->service()->attach($serviceId);
        }
    }

    return redirect()->route('packages.index');

    }


 public function update(Request $request,$id)
 {
    $package=Package::find($id);
    $data=$request->all();

    $package->update($data);
    return redirect()->route('packages.index');

}
   public function delete(Request $request,$id)
   {
     $package=Package::find($id);
     $data=$request->all();

     $package->delete();
     return redirect()->route('packages.index');
   }
}
