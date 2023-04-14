<?php

namespace App\Models\Traits;

trait LocationFilterTrait
{
    // Filter users by age
    public function scopeFilterByLocation($query, $location)
    {
        return $query->where('location', $location);
    }
}
