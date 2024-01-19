<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingService extends Model
{
    use HasFactory;

    protected $fillable = ['id','booking_id','package_service_id','date_selected'];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function packageService()
    {
        return $this->belongsTo(PackageService::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
