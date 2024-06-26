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
        'username',
        'email_verified_at',
        'password',

        // Personal Details
        'status',
        'salutation',
        'first_name',
        'last_name',
        'passport_num',
        'designation',
        'is_DirectorGeneral',
        'address',
        'telephone',
        'mobile',
        'profile_image',
        'passport_photo',
        'is_HOD',

        // Conference Details
        'badge_name',
        'conference_role',
        'country',
        'organization',

        // Accommodations & Preferences
        'airport_destination',
        'hotel_reco',
        'otherHotel',
        'attire_size',
        'attire_special_req',
        'preferred_activity',
        'dietary_restrictions',
        'dietary_special_req',

        // Accompanying Person/Spouse
        'has_spouse',
        'accomp_fname',
        'accomp_lname',

        // Copyright & Privacy Policy
        'privacy',
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
    public function files()
    {
        return $this->hasMany(File::class);
    }
    public function accessCode()
    {
        return $this->hasOne(AccessCode::class);
    }
    public function delegateFlight()
    {
        return $this->hasOne(DelegateFlightInformation::class);
    }
}
