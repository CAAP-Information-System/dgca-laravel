<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DelegateFlightInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'country',
        'arrival_flight_num',
        'arrival_date',
        'arrival_time',
        'departure_flight_num',
        'departure_date',
        'departure_time',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
