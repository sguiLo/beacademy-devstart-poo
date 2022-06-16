<?php

declare(strict_types=1);

class Professor 
{
    private string $nome;
    private string $cpf;
    private float $salario;

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

    public function setSalario(): float 
    {
        return $this->salario;
    }

    public function getSalario(float $novoSalario): void
    {
        $this->salario = $novoSalario;
    }
};