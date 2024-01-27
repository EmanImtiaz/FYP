<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable=['id','city_name','province_id'];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function towns()
    {
        return $this->hasMany(Town::class);
    }
}



