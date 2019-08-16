<?php

namespace App\Domain\Repositories;
use App\Domain\Models\User;

interface UserRepository
{
    public function add(User $user);
}