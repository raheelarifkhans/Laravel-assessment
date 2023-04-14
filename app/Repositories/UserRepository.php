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

    public function getAllUsers()
    {
        return $this->userModel->query()
            ->with('languages')
            ->get();
    }
}
