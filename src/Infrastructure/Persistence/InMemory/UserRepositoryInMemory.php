<?php

namespace App\Infrastructure\Persistence\InMemory;

use App\Domain\Repositories\UserRepository;
use App\Domain\Models\User;

class UserRepositoryInMemory implements UserRepository
{
    private $user;

     public function add(User $user)
     {
        $this->user = $user;
     }
}