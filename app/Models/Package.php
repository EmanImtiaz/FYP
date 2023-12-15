<?php

namespace App\Models;

use App\Models\Service;
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

public function packageServices()
{
    return $this->hasMany(PackageService::class);
}
// for edit and updation packages
public function services()
    {
        return $this->belongsToMany(Service::class, 'package_services', 'package_id', 'service_id');
    }
}
