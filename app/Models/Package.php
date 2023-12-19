<?php

namespace App\Models;

use App\Models\Service;
use App\Models\PackageService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = ['id','title', 'description','price','discount', 'is_active'];

    public function service()
    {
        return $this->belongsToMany(PackageService::class, 'id');
    }
// for delete pacakge with selected services

 // public function packageServices()
// {
  //  return $this->hasMany(PackageService::class);
// }
// Define the relationship for fetching services associated with a package
// for edit and updation packages
public function services()
    {
        return $this->belongsToMany(Service::class, 'package_services', 'package_id', 'service_id');
    }
// Define the relationship for fetching package services
    public function packageServices()
{
    return $this->hasMany(PackageService::class, 'package_id');
}

// Add this function for fetching service price
public function servicePrice($serviceId)
{
    return $this->packageServices->where('service_id', $serviceId)->first()->price ?? null;
}

// Add this function for updating total price in the Package model
public function updateTotalPrice()
{
    $totalPrice = $this->packageServices()->sum('price');
    $this->update(['price' => $totalPrice]);
}


}
