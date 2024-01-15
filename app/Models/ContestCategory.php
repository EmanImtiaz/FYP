<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContestCategory extends Model
{
    use HasFactory;

    protected $fillable=['id','category_name','description','img'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
