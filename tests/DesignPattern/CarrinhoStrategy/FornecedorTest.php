<?php

use PHPUnit\Framework\TestCase;
use App\DesignPattern\CarrinhoStategy\Fornecedor;

class FornecedorTest extends TestCase
{
    public function setUp(): void 
    {
        $this->fornecedorInstance = new Fornecedor(1, "Razao");
    }

    public function test_Instance_Of()
    {
        $this->assertInstanceOf(Fornecedor::class, $this->fornecedorInstance);
    }
}