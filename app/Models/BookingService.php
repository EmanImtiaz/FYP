<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingService extends Model
{
    use HasFactory;

    protected $fillable = ['id','booking_id','package_service_id','date_selected','total_amount'];

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }

    public function packageService()
    {
        return $this->belongsTo(PackageService::class, 'package_service_id');
    }
}
