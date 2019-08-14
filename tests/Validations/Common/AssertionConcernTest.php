<?php

use PHPUnit\Framework\TestCase;
use App\Validations\Common\AssertionConcern;

class AssertionConcernTest extends TestCase
{
    public function testArgumentEquals()
    {
        $password = "jhow"; 
        $confirmPassword = "jhow";
        AssertionConcern::AssertArgumentEquals($password, $confirmPassword, "As senhas não correspondem");
        $this->assertEquals($password, $confirmPassword);
    }

    public function testAssertArgumentNotEmpty()
    {
        $password = "jhow";
        AssertionConcern::AssertArgumentNotEmpty($password,"Senha Invalida");
        //$this->assertEquals($a, $b);
    }
}