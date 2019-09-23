<?php

namespace App\DesignPattern\CarrinhoStategy;

class CotacaoCarrinho extends CarrinhoAbstract
{
    public function __construct($isBaseadoRequisicao)
    {
        parent::__construct($isBaseadoRequisicao);
    }
}