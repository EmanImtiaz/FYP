<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $fillable=['id','province_name'];

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function towns()
    {
        return $this->hasMany(Town::class);
    }
}
