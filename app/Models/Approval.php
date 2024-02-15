<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];

    // Function to update the file name
    public function updateFileName($newName)
    {
        $this->update(['name' => $newName]);
    }
}
