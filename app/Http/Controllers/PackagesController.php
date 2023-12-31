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
    $validatedData = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'is_active' => 'required',
        'services' => 'array',
        // Validate other fields as per your form
    ]);

    // Create the package
    $package = Package::create($validatedData);
    $packageId = $package->id;

    // Handle association of services
    if ($request->has('services')) {
        foreach ($request->input('services') as $serviceId) {
            // Extract price and discount for each service
            $servicePrice = $request->input('prices.' . $serviceId);
            $discount = $request->input('discounts.' . $serviceId);

            // Create the PackageService record for each service
            PackageService::create([
                'user_id' => auth()->user()->id,
                'package_id' => $packageId,
                'service_id' => $serviceId,
                'price' => $servicePrice,
                'discount' => $discount,
            ]);
        }
    }

    // Redirect after creating the package and its associated services
    return redirect()->route('Frontend.profile');
}

public function edit($id)
{
    $package = Package::with('services')->find($id);
    $services = Service::all(); // Fetch all services

    return view('Frontend.createpackages', compact('package', 'services'));

}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'is_active' => 'required',
        'services' => 'array',
        // Validate other fields as per your form
    ]);

    $package = Package::findOrFail($id);
    $package->update($validatedData);

    $package->packageServices()->delete(); // Delete existing associations

    if ($request->has('services')) {
        foreach ($request->input('services') as $serviceId) {
            $servicePrice = $request->input('prices.' . $serviceId);
            $discount = $request->input('discounts.' . $serviceId);

            PackageService::create([
                'user_id' => auth()->user()->id,
                'package_id' => $id,
                'service_id' => $serviceId,
                'price' => $servicePrice,
                'discount' => $discount,
            ]);
        }
    }

    return redirect()->route('Frontend.profile');
}

public function delete($id)
{
    $package = Package::findOrFail($id);
    $package->packageServices()->delete(); // Delete associated services
    $package->delete(); // Delete the package

    return redirect()->route('Frontend.profile');
}


public function calculateServicesPrice(Request $request)
{
   // Fetch all PackageServices
   $packageServices = PackageService::with('service')->get();

   $totalPrice = 0;

   foreach ($packageServices as $packageService) {
       $servicePrice = $packageService->service->price;
       $discount = $packageService->discount;

       // Calculate total price for each service
       $totalPrice += $servicePrice - $discount;
   }

   return response()->json(['totalPrice' => $totalPrice]);
}


public function view()
{
    $packages = PackageService::with('package')->get();

    return view('Frontend.profile', compact('packages'));

}

}


