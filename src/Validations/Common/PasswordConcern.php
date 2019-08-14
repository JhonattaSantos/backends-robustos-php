<?php

namespace App\Validations\Common;

class PasswordConcern
{
    public static function AssertIsValid($password)
    {
        AssertionConcern::AssertArgumentNotEmpty($password, "Senha Invalida");
    }

    public static function Encrypt($password)
    {
        $options = [
            'cost' => 12,
        ];
       return password_hash($password,PASSWORD_BCRYPT,$options);
    }

}