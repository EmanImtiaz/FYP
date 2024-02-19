<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['id','user_id','photographer_profile_id','name', 'email', 'phone', 'province_id','city_id','town_id','payment_method_options','evidence','account_name', 'account_number','is_paid', 'remarks','total_amount','payment_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bookingServices()
    {
        return $this->hasMany(BookingService::class, 'booking_id');
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id');
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function services()
    {
        return $this->hasMany(BookingService::class);
    }
    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function town()
    {
        return $this->belongsTo(Town::class);
    }
}
