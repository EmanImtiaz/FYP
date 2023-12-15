<?php

namespace App\Models;

use App\Models\Package;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['id','title', 'is_active'];

  //  public function package()
  //  {
 //       return $this->belongsToMany(PackageService::class, 'id');
  //  }

  public function packages()
    {
        return $this->belongsToMany(Package::class, 'package_services', 'service_id', 'package_id');
    }
}





