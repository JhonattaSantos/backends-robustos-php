<?php

namespace App\Validations\Common;
use Exception;

class EmailConcern
{
    public static function AssertIsValid($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            throw new Exception("E-mail invalido");
    }

}