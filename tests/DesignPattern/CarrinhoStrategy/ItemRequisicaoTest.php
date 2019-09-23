<?php

use PHPUnit\Framework\TestCase;
use App\DesignPattern\CarrinhoStategy\Requisicao;
use App\DesignPattern\CarrinhoStategy\ItemRequisicao;

class ItemRequisicaoTest extends TestCase
{
    protected $instance;

    protected function setUp(): void
    {
        $this->instance = new ItemRequisicao(1, 25, new Requisicao(25257, 10278558));
    }

    public function testInstanceOf()
    {
        $this->assertInstanceOf(ItemRequisicao::class, $this->instance);
    }

}