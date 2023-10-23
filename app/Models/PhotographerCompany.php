<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotographerCompany extends Model
{
    use HasFactory;

    protected $fillable = ['logo', 'company_name', 'bio', 'address', 'contact'];
}
