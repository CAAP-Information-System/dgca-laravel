<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{

    protected $fillable = [
        'paper_no',
        'name',
        'owner',
        'upload_date',
        'size',
        'file_category',
        'discussion_agenda',
        'information_agenda',
    ];

    // Function to update the file name
    public function updateFileName($newName)
    {
        $this->update(['name' => $newName]);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
