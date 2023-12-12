<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use App\Models\Services;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function create()
    {
       $packages=new Packages;
       $services = Services::all(); // Fetch all services
       return view('admin.company profile portion.Packages.create',compact('packages','services'));
    }

    public function index()
 {
    $packages=Packages::get();
    return view('admin.company profile portion.Packages.index',compact('packages'));
 }
 public function edit($id)
 {
    $packages=Packages::find($id);
    return view('admin.company profile portion.Packages.create',compact('packages'));
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


    $package = Packages::create($data);
    $package_id = $package->id; // Get the package ID

      // Attach services to the package
      if ($request->has('services')) {
        foreach ($request->input('services') as $serviceId) {
            $package->services()->attach($serviceId);
        }
    }

    return redirect()->route('packages.index');

    }


 public function update(Request $request,$id)
 {
    $packages=Packages::find($id);
    $data=$request->all();

    $packages->update($data);
    return redirect()->route('packages.index');

}
   public function delete(Request $request,$id)
   {
     $packages=Packages::find($id);
     $data=$request->all();

     $packages->delete();
     return redirect()->route('packages.index');
   }
}
