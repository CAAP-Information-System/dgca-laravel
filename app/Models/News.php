<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'news_title',
        'news_description',
        'news_image',
        'date_uploaded',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
