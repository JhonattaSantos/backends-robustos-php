<?php

use PHPUnit\Framework\TestCase;
use App\DesignPattern\CarrinhoStategy\CotacaoCarrinho;
use App\DesignPattern\CarrinhoStategy\ItemRequisicao;
use App\DesignPattern\CarrinhoStategy\Requisicao;
use App\DesignPattern\CarrinhoStategy\Fornecedor;

class CotacaoCarrinhoTest extends TestCase
{
    public function setUp(): void 
    {
        $this->carrinhoInstance = new CotacaoCarrinho(false);
    }

    public function test_Instance_Of()
    {
        $this->assertInstanceOf(CotacaoCarrinho::class, $this->carrinhoInstance);
    }

    public function test_Carrinho_Vazio()
    {
        $this->assertEmpty($this->carrinhoInstance->getItens());
    }

    public function test_Add_Item_Carrinho()
    {
        $this->carrinhoInstance->addItem(new ItemRequisicao(1, 25, new Requisicao(25257, 10278558)));
        $this->assertCount(1, $this->carrinhoInstance->getItens());
    }

    public function test_Carrinho_Sem_Fornecedores()
    {
        $this->assertEmpty($this->carrinhoInstance->getFornecedores());
    }

    public function test_Add_Fornecedor_Carrinho()
    {
        $this->carrinhoInstance->addFornecedor(new Fornecedor(1, "Razao"));
        $this->assertCount(1, $this->carrinhoInstance->getFornecedores());
    }
}