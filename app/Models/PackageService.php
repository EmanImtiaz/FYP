<?php

namespace App\Models;

use App\Models\Service;
use App\Models\Package;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageService extends Model
{
    use HasFactory;

    protected $fillable = ['id','package_id','service_id','price', 'discount','user_id'];

  //  protected $attributes = [
 //       'price' => 0,
 //  ];

     public function package()
     {
        return $this->belongsTo(Package::class);
     }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    //   public function package()
  //  {
  //      return $this->belongsTo(Package::class, 'package_id');
 //   }
}
