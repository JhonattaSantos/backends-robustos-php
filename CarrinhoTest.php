<?php

require __DIR__ . '/vendor/autoload.php';

//use Exception;
use App\Carrinho\CotacaoCarrinho;
use App\Carrinho\LicitacaoCarrinho;
use App\Carrinho\Requisicao;
use App\Carrinho\Item;
use App\Carrinho\ItemRequisicao;
use App\Carrinho\Fornecedor;

try{
    $cotacaoCarrinho = new CotacaoCarrinho(false);
    $item1 = new ItemRequisicao(1, 25, new Requisicao(25257, 10278558));
    $item1->setMarca("BIC");
    $item1->setValidadeObrigatoria(true);
    $item2 = new ItemRequisicao(2, 25, new Requisicao(25257, 10278558));
    $item2->setNarrativa("Caneta Preta");
    $item2->setModeloObrigatorio(true);
    $item2->setArquivo(2589);
    $cotacaoCarrinho->addItem($item1);
    $cotacaoCarrinho->addItem($item2);
    //$cotacaoCarrinho->addFornecedor(new Fornecedor(113, "Jhow Emprendimento de TI"));
    //$cotacaoCarrinho->addFornecedor(new Fornecedor(113, "Dantel Negocios de TI"));
    $cotacaoCarrinho->setPrazoResposta(\Date('Y-m-d h:m:i'));
    $cotacaoCarrinho->criarCotacao();
    print_r($cotacaoCarrinho);

}catch(\Exception $e)
{
    echo $e->getMessage(). PHP_EOL;
}
