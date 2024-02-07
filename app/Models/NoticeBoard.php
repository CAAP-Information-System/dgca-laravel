<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticeBoard extends Model
{
    protected $fillable = [
        'title',
        'description',
        'date_uploaded',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
