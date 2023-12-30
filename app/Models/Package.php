<?php

namespace App\Models;

use App\Models\Service;
use App\Models\PackageService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = ['id','title', 'description', 'is_active'];

    public function packageServices()
    {
       return $this->hasMany(PackageService::class);
    }

    public function services()
{
    return $this->belongsToMany(Service::class, 'package_services');
}

 //   public function service()
//    {
 //       return $this->belongsToMany(PackageService::class);
 //   }

// Define the relationship for fetching package services
// for delete pacakge with selected services




// Add this function for fetching service price
//public function servicePrice($serviceId)
//{
 //   return $this->packageServices->where('service_id', $serviceId)->first()->price ?? null;
//}

 // Add this function for fetching service discount
 //public function serviceDiscount($serviceId)
 //{
 //    return $this->packageServices->where('service_id', $serviceId)->first()->discount ?? null;
// }

 // Add this function for updating total price in the Package model
 //public function updateTotalPrice()
// {
  //   $totalPrice = $this->packageServices()->sum('price') - $this->packageServices()->sum('discount');
 //    $this->update(['price' => $totalPrice]);
 //}

}
