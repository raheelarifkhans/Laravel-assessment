<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code'];

    // Define the many-to-many relationship with User model
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_languages', 'language_id', 'user_id');
    }
}
