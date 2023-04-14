<?php

namespace App\Models\Traits;

trait GenderFilterTrait
{
    // Filter users by age
    public function scopeFilterByGender($query, $gender)
    {
        return $query->where('gender', $gender);
    }
}
