<?php

declare(strict_types=1);

class Aluno //classe
{ 
    private string $nome; //atributos
    private string $cpf; //atributos

    public function getNome(): string 
    {
        return $this->nome;
    }

    public function setNome(string $novoNome): void 
    {
        if (strlen($novoNome) <= 2 ) {
            die('Ops, o nome é muito curto.');
        }

        $this->nome = $novoNome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $novoCpf): void 
    {
        if (strlen($novoCpf) <= 12) {
            die('Ops, cpf necessita de 12 digitos');
        }

        $this->cpf = $novoCpf;
    }
};

