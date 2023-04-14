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

        // Add more filters as needed

        return $query->get();
    }
}
