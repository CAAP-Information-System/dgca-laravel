<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SideMeeting extends Model
{
    protected $fillable = [
        'days_drop',
        'meeting_room_drop',
        'time_drop',
        'country_drop',
        'reserved_by',
        'reservee',
        'approval_status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


