<?php

namespace App\Models\Traits;

use Illuminate\Support\Facades\DB;

trait AgeFilterTrait
{
    // Filter users by age
    public function scopeFilterByAge($query, $age)
    {
        return $query->where(DB::raw("TIMESTAMPDIFF(YEAR, date_of_birth, current_date) "), $age);
    }
}
