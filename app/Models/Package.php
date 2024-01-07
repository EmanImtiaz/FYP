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

}
