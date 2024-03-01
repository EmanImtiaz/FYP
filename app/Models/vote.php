<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = ['id', 'category_id', 'user_id', 'photocontest_id', 'likes', 'dislikes'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function photocontest()
    {
        return $this->belongsTo(PhotoContest::class, 'photocontest_id');
    }
}
