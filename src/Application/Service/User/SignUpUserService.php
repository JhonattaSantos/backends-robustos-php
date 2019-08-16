<?php

namespace App\Application\Service\User;

use App\Domain\Repositories\UserRepository;
use App\Domain\Models\User;

class SignUpUserService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function execute(SignUpUserRequest $request)
    {
        $username = $request->username();
        $password = $request->password();

        $this->userRepository->add(new User(
            $username,
            $password
        ));
    }
}