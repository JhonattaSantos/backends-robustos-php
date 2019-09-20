<?php

namespace App\Carrinho;

abstract class RequisicaoAbstract
{
    protected $id;
    protected $identificacao;
    
    public function __construct($id, $identificacao)
    {
        $this->id = $id;
        $this->identificacao = $identificacao;
    }
}