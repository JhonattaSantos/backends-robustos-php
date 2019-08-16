<?php 

require_once "vendor/autoload.php";

use App\Domain\Models\User;
use App\Application\Service\User\SignUpUserRequest;
use App\Infrastructure\Persistence\InMemory\UserRepositoryInMemory;



try{

    $signUpUserRequest = new SignUpUserRequest("fulano", "xpto");

    $userRepository = new UserRepositoryInMemory();
    $userRepository->add(new User(
        $signUpUserRequest->username(),
        $signUpUserRequest->password()
    ));

    /*$user = new User("Jhonatta", "jhonattasantoss@hotmail.com");
    $user->setPassword("jhonatta", "jhonatta");
    print_r($user);

    $user->resetPassword();
    print_r($user);*/

}catch(Exception $e){
    echo $e->getMessage();
}
