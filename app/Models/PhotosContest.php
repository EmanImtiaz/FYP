<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotosContest extends Model
{
    use HasFactory;

    protected $fillable=['id','contest_img','likes','dislikes','photographer_name','profile_img'];
}
