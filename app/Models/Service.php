<?php

namespace App\Models;

use App\Models\Package;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['id','title', 'is_active'];

    public function package()
    {
        return $this->belongsToMany(PackageService::class);
    }
    public function packageServices()
    {
        return $this->belongsToMany(PackageService::class);
    }

}





