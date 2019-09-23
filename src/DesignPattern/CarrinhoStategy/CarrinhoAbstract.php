<?php

namespace App\DesignPattern\CarrinhoStategy;

abstract class CarrinhoAbstract
{
    protected $itens;
    protected $fornecedores;
    protected $isBaseadoRequisicao;
    protected $prazoResposta;

    public function __construct($isBaseadoRequisicao)
    {
        $this->isBaseadoRequisicao = $isBaseadoRequisicao;
        //echo "Iniciando Carrinho Cotação". PHP_EOL;
        $this->itens = [];
        $this->fornecedores = [];
    }

    public function addItem(ItemAbstract $item)
    {
        if($this->isBaseadoRequisicao && !method_exists($item, "getRequisicao")){
            throw new \Exception("Essa cotacao deve conter itens de requisicoes");
        }

        $this->itens[] = $item;
    }

    public function getItens()
    {
        return $this->itens;
    }

    public function addFornecedor(Fornecedor $fornecedor)
    {
        $this->fornecedores[] = $fornecedor;
    }

    public function getFornecedores()
    {
        return $this->fornecedores;
    }

    public function setPrazoResposta($prazoResposta)
    {
        $this->prazoResposta = $prazoResposta;
        return $this;
    }

    public function getPrazoResposta()
    {
        return $this->prazoResposta;
    }
}