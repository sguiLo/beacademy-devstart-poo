<?php

declare(strict_types=1);

class Produto 
{
    //metodo magico de construção do objeto 
    public function __construct(
        private string $nome,
        private float $valor,
        private readonly Categoria $categoria
    ) {

    }

    private string $descricao;

    //Atributos
    // private string $nome;
    // private float $valor;

    // public function __construct(string $novoNome, float $novoValor)
    // {
        
    //     $this->nome = $novoNome;
    //     $this->valor = $novoValor;
    // }

    //metodos
    public function getNome(): string
    {
        
        return $this->nome;
    }

    public function setNome(string $novoNome): void
    {   
        if (strlen($novoNome) <= 6) {
            die('Ops, nome muito curto');
        }
        
        $this->nome = $novoNome;
    }


    public function getValor(): float 
    {

        return $this->valor;
    }


    public function setValor(float $novoValor): void 
    {
        if ($novoValor < 0){
            die('Ops, valor não pode ser negativo');
        }

       $this->valor = $novoValor; 
    }

    public function getDescricao(): string 
    {
        return $this->descricao;
    }

    public function setDescricao(string $novaDescricao): void 
    {
        $this->descricao = $novaDescricao;
    }

    public function setCategoria(Categoria $categoria): void
    {
        $this->categoria = $categoria;
    }
}