<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilePortfolio extends Model
{
    use HasFactory;

    protected $fillable=['id','img','category_id','user_id'];

    public function category()
    {
        return $this->belongsTo(ProfileCategory::class, 'category_id');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
