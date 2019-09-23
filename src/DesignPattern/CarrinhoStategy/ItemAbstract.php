<?php

namespace App\DesignPattern\CarrinhoStategy;

abstract class ItemAbstract
{
    protected $sequencia;
    protected $quantidade;
    protected $narrativa;
    protected $marcas;
    protected $arquivos;
    protected $validadeObrigatoria;
    protected $modeloObrigatorio;
    protected $observacoes;
    
    public function __construct($quantidade)
    {
        $this->quantidade = $quantidade;
        $this->marcas = [];
        $this->arquivos = [];
        $this->validadeObrigatoria = false;
        $this->modeloObrigatorio = false;
    }

    public function setMarca($marca)
    {
        $this->marcas[] = $marca;
        return $this;
    }

    public function getArquivos()
    {
        return $this->arquivos;
    }

    public function setArquivo($arquivos)
    {
        $this->arquivos[] = $arquivos;
        return $this;
    }

    public function getMarcas()
    {
        return $this->marcas;
    }

    public function setModeloObrigatorio(bool $is)
    {
        $this->modeloObrigatorio = $is;
    }

    public function isModeloObrigatorio()
    {
        return $this->modeloObrigatorio;
    }

     public function setValidadeObrigatoria(bool $is)
    {
        $this->validadeObrigatoria = $is;
    }

    public function isValidadeObrigatoria()
    {
        return $this->validadeObrigatoria;
    }

    public function setNarrativa($narrativa)
    {
        $this->narrativa = $narrativa;
        return $this;
    }

    public function getNarrativa()
    {
        return $this->narrativa;
    }

    public function setObservacoes($observacoes)
    {
        $this->observacoes = $observacoes;
        return $this;
    }

    public function getObservacoes()
    {
        return $this->observacoes;
    }

    public function __toString()
    {
        return "Sequencia : ". $this->sequencia ." Quantidade ". $this->quantidade. PHP_EOL;
    }
}