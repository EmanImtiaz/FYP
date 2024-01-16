<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['id','user_id','name', 'email', 'phone', 'address', 'remarks','total_amount','payment_method'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bookingServices()
    {
        return $this->hasMany(BookingService::class, 'booking_id');
    }
}
