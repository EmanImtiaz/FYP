<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoContest extends Model
{
    use HasFactory;
    protected $fillable = [ 'id', 'contest_img','description' , 'views', 'tags'];
}
