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
}
