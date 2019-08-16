<?php

namespace App\Domain\UsersContext\Models;
use App\Validations\Common\AssertionConcern;
use App\Validations\Common\PasswordConcern;
use App\Validations\Common\EmailConcern;

class User
{
    private $id;
    private $name;
    private $email;
    private $password;

    public function __construct($name, $email)
    {
        $this->id = uniqid();
        $this->name = $name;
        $this->email = $email;

        $this->validate();
    }

    public function validate()
    {
        AssertionConcern::AssertArgumentRange($this->name, 3, 100, "O nome deve ter entre 3 e 100 caracteres");
        EmailConcern::AssertIsValid($this->email);
        //PasswordConcern::AssertIsValid($this->password);
    }

    public function setPassword($password, $confirmPassword)
    {
        AssertionConcern::AssertArgumentEquals($password, $confirmPassword, "As senhas não correspondem");
        AssertionConcern::AssertArgumentNotEmpty($password,"Senha Invalida");
        AssertionConcern::AssertArgumentNotEmpty($confirmPassword,"Confirmação de senha invalida");
        AssertionConcern::AssertArgumentRange($password, 6, 60, "Sua senha deve ter entre 6 e 60 caracteres");

        $this->password = PasswordConcern::Encrypt($password);
    }

    public function resetPassword()
    {
        $newPassword = substr(uniqid(),0,8);
        $this->password = PasswordConcern::Encrypt($newPassword);
        return $this->password;
    }

    public function changeName($name)
    {
        $this->name = $name;
    }

}