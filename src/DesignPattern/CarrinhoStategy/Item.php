<?php

namespace App\Carrinho;

class Item extends ItemAbstract
{

    public function __construct($quantidade)
    {
        parent::__construct($quantidade);
        //echo "Item Adicionado no carrinho". PHP_EOL;
    }
}