<?php

namespace App\DesignPattern\CarrinhoStategy;

class ItemRequisicao extends ItemAbstract
{   
    protected $sequencia;
    protected $requisicao;     

    public function __construct($sequencia, $quantidade, RequisicaoAbstract $requisicao)
    {
        parent::__construct($quantidade);
        $this->sequencia = $sequencia;
        $this->requisicao = $requisicao;
    }

    public function getRequisicao()
    {
        return $this->requisicao;
    }
}