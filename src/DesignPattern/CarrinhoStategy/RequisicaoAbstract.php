<?php

namespace App\DesignPattern\CarrinhoStategy;

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