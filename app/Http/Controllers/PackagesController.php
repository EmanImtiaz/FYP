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
       return view('Frontend.createpackages',compact('package','services'));
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
        'is_active' => 'required',
    ], [
        'title.required' => 'Please enter title',
    ]);

    $data = $request->all();

    // Create the package
    $package = Package::create($data);
    $package_id = $package->id;

    $totalPrice = 0; // Initialize total price

    // Attach services to the package
    if ($request->has('services')) {
        foreach ($request->input('services') as $serviceId => $servicePrice) {
            // Only create PackageService if the checkbox is selected and a valid price is provided
            if ($servicePrice !== null && $servicePrice !== '') {
                PackageService::create([
                    'user_id' => auth()->user()->id,
                    'package_id' => $package_id,
                    'service_id' => $serviceId,
                    'price' => $servicePrice,
                ]);

                // Add service price to total price
                $totalPrice += $servicePrice;
            }
        }
    }

    // Update the total price in the package table
    $package->update(['price' => $totalPrice]);

    return redirect()->route('Frontend.profile');
}




// Add this function for updating total price in the Package model
public function updateTotalPrice()
{
    $totalPrice = $this->packageServices()->sum('price');
    $this->update(['price' => $totalPrice]);
}

public function edit($id)
{
    $package = Package::with('services')->find($id);
    $services = Service::all(); // Fetch all services

    return view('Frontend.createpackages', compact('package', 'services'));
}

public function update(Request $request, $id)
{
    $package = Package::with('services')->find($id);

    $data = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'price' => 'required',
        'discount' => 'required',
        'is_active' => 'required',
        'services.*' => 'numeric', // Validate that services prices are numeric
    ]);

    // Update the package
    $package->update($data);

    // Attach services to the package
    if ($request->has('services')) {
        $package->packageServices()->delete(); // Delete existing package services

        foreach ($request->input('services') as $serviceId => $servicePrice) {
            if ($servicePrice !== null && $servicePrice !== '') {
                $package->packageServices()->create([
                    'user_id' => auth()->user()->id,
                    'service_id' => $serviceId,
                    'price' => $servicePrice,
                ]);
            }
        }
    }

    // Calculate and update the total price in the package table
    $package->updateTotalPrice();

    return redirect()->route('Frontend.profile');
}


 public function delete(Request $request, $id)
 {
     $package = Package::find($id);
     // Use the relationship to delete the related services from package_services table
     $package->packageServices()->delete();

     $package->delete();

     return redirect()->route('Frontend.profile');
 }

 public function view()
{
    $packages = PackageService::with('package')->get();

    return view('Frontend.profile', compact('packages'));
}
}
