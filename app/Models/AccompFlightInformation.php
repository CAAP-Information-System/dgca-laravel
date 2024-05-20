<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccompFlightInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'salutation',
        'first_name',
        'last_name',
        'mobile',
        'country',
        'passport_num',
        'gender',
        'address',
        'arrival_flight_num',
        'arrival_date',
        'arrival_time',
        'departure_flight_num',
        'departure_date',
        'departure_time',
        'preferred_activity',
        'name_of_delegate',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
