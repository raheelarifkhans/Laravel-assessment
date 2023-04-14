<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function getAllUsers($filters)
    {
        $query = $this->userModel->query()->with('languages');

        // Apply age filter
        if (isset($filters['age'])) {
            $query->filterByAge($filters['age']);
        }

        // Apply gender filter
        if (isset($filters['gender'])) {
            $query->filterByGender($filters['gender']);
        }

        // Apply location filter
        if (isset($filters['location'])) {
            $query->filterByLocation($filters['location']);
        }

        // Add more filters as needed

        return $query->get();
    }
}
