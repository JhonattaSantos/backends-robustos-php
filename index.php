<?php 

require_once "vendor/autoload.php";

use App\Domain\Models\User;




try{
    $user = new User("Jhonatta", "jhonattasantoss@hotmail.com");
    $user->setPassword("jhonatta", "jhonatta");
    print_r($user);

    $user->resetPassword();
    print_r($user);

}catch(Exception $e){
    echo $e->getMessage();
}
