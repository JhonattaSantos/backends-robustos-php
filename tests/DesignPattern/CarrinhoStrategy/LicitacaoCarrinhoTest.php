<?php

use PHPUnit\Framework\TestCase;
use App\DesignPattern\CarrinhoStategy\LicitacaoCarrinho;

class LicitacaoCarrinhoTest extends TestCase
{
    public function testInstanceOf()
    {
        $this->assertInstanceOf(LicitacaoCarrinho::class, new LicitacaoCarrinho(true));
    }
}