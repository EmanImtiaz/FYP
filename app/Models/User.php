<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id',
        'name',
        'email',
        'password',
        'province_id',
        'city_id',
        'town_id',
        'contact',
        'profile_image',
        'role',
    ];
    // user relationship with profile//


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function photographerProfile()
      {
          return $this->hasOne(PhotographerProfile::class);
      }

      // relation b/w user & packadeservice table
    public function packages()
    {
        return $this->hasMany(PackageService::class, 'user_id');
    }

    // booking
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'user_id');
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
    //admin panel role//
     /**
     * Check if the user has any of the specified roles.
     *
     * @param array $roles
     * @return bool
     */
    public function hasAnyRole(...$roles)
    {
        return in_array($this->role, $roles);
    }

    // profile portfolio //

       public function profileportfolio()
       {
           return $this->hasMany(ProfilePortfolio::class);
       }

}

