<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoContest extends Model
{
    use HasFactory;

    protected $fillable = [ 'id','category_id','contest_img','description' , 'views', 'tags','user_id'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

