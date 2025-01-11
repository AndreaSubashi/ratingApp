<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;

    // Define the relationship with the User model
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_shows')
                    ->withPivot('status', 'rating', 'comment')
                    ->withTimestamps();
    }
}