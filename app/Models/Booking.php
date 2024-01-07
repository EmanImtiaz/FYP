<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['id','user_id','name', 'email', 'phone', 'address', 'remarks'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function bookingServices()
    {
        return $this->hasMany(BookingService::class, 'booking_id');
    }
}
