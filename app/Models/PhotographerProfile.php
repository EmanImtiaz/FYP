<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotographerProfile extends Model
{
    use HasFactory;

    protected $fillable = [ 'user_id','documents', 'company_name','logo' , 'bio'];

    public function user()
     {
         return $this->belongsTo(User::class, 'user_id');
   }
}
