<?php

namespace App\Http\Controllers;

use App\Models\PackageService;
use App\Models\Package;
use App\Models\Service;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function create()
    {
        $package = new Package;
        $services = Service::all(); // Fetch all services
       return view('admin.company profile portion.Packages.create',compact('package','services'));
    }

    public function index()
 {
    $package=Package::get();
    return view('admin.company profile portion.Packages.index',compact('package'));
 }

 public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'price' => 'required',
        'is_active' => 'required',
    ], [
        'title.required' => 'Please enter title',
        'price.required' => 'Please enter price',
    ]);

    $data = $request->all();

    // Create the package
    $package = Package::create($data);
    $package_id = $package->id; // Get the package ID

    // Attach services to the package
    if ($request->has('services')) {
        foreach ($request->input('services') as $serviceId) {
            PackageService::create([
                'user_id' => auth()->user()->id, // Set the user_id
                'package_id' => $package_id,
                'service_id' => $serviceId,
            ]);
        }
    }

    return redirect()->route('packages.index');
}

public function edit($id)
{
    $package = Package::find($id);
    $services = Service::all(); // Fetch all services
    return view('admin.company profile portion.Packages.create', compact('package', 'services'));
}

public function update(Request $request, $id)
{
    $package = Package::find($id);

    $data = $request->validate([
        'title' => 'required',
        'price' => 'required',
        'is_active' => 'required',
    ]);

    // Update the package
    $package->update($data);

    if ($request->has('services')) {
        $package->packageServices()->delete(); //for Delete existing package services

        foreach ($request->input('services') as $serviceId) {
            $package->packageServices()->create([
                'user_id' => auth()->user()->id,
                'service_id' => $serviceId,
            ]);
        }
    }
    return redirect()->route('packages.index');
}

 public function delete(Request $request, $id)
 {
     $package = Package::find($id);
     // Use the relationship to delete the related services from package_services table
     $package->packageServices()->delete();

     $package->delete();

     return redirect()->route('packages.index');
 }
}
