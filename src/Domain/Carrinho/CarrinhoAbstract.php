<?php

namespace App\Carrinho;

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

    public function addFornecedor(Fornecedor $fornecedor)
    {
        $this->fornecedores[] = $fornecedor;
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

    public function criarCotacao()
    {
        if(empty($this->itens)){
            throw new \Exception("Não é possivel criar cotação sem itens");
        }

        echo "Cotacao Criada com sucesso". PHP_EOL;
    }
}