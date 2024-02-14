<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'img_title',
        'img_file',
        'img_size',
        'date_uploaded'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
