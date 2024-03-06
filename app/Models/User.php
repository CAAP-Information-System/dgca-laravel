<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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
    protected $fillable = [
        // Authentication
        'email',
        'email_verified_at',
        'password',

        // Personal Details
        'status',
        'salutation',
        'first_name',
        'last_name',
        'passport_num',
        'designation',
        'gender',
        'address',
        'telephone',
        'mobile',
        'profile_image',
        'passport_photo',

        // Conference Details
        'badge_name',
        'conference_role',
        'country',
        'organization',

        // Flight Details
        // Arrival
        'arrival_flight_num',
        'arrival_date',
        'arrival_time',
        // Departure
        'departure_flight_num',
        'departure_date',
        'departure_time',

        // Accommodations & Preferences
        'airport_destination',
        'hotel_reco',
        'otherHotel',
        'neck',
        'shoulder',
        'attire_special_req',
        'preferred_activity',
        'dietary_restrictions',
        'dietary_special_req',

        // Accompanying Person/Spouse
        'has_spouse',
        'accomp_name',
        'accomp_country',
        'accomp_preferred_activity',

        // Copyright & Privacy Policy
        'privacy',
        'profile_image',
    ];

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
    public function isAdmin()
    {
        return $this->is_admin;
    }
    public function getNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
    public function sideMeetings()
    {
        return $this->hasMany(SideMeeting::class);
    }
}
