<?php

namespace App\Carrinho;

class Requisicao extends RequisicaoAbstract
{    
    public function __construct($id, $identificacao)
    {
        parent::__construct($id, $identificacao);
    }
}