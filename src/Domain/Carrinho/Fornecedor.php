<?php

namespace App\Carrinho;

class Fornecedor
{
    protected $id;
    protected $razaoSocial;

    public function __construct($id, $razaoSocial)
    {
        $this->id = $id;
        $this->razaoSocial = $razaoSocial;
    }
}