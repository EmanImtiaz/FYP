<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;

    protected $fillable = ['id','title', 'description','price','discount', 'is_active'];

    public function services()
{
    return $this->belongsToMany(Services::class);
}
}
