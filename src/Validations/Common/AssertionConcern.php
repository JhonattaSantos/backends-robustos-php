<?php

namespace App\Validations\Common;

use Exception;

class AssertionConcern
{
    public static function AssertArgumentEquals($object1, $object2, $message)
    {
        if($object1 !== $object2)
            throw new Exception($message);
    }

    public static function AssertArgumentNotEmpty($stringValue, $message)
    {
        if(is_null($stringValue) || strlen(trim($stringValue)) === 0 )
            throw new Exception($message);
    }

    public static function AssertArgumentRange($value, $min, $max, $message)
    {
        $valueLen = strlen(trim($value));
        if($valueLen < $min || $valueLen > $max)
            throw new Exception($message);
    }

}