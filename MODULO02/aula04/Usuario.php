<?php

declare(strict_types=1);

abstract class Usuario
{
    private string $nome;
    private string $email;
    private string $senha;
    private string $cpf;

    public function __construct(string $email, string $senha)
    {
        $this->email = $email;
        $this->senha = $senha;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome():string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */ 
    public function setNome(string $nome):void
    {
        $this->nome = $nome;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail():string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */ 
    public function setEmail(string $email):void
    {
        $this->email = $email;
    }

    /**
     * Get the value of senha
     */ 
    public function getSenha():string
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     */ 
    public function setSenha(string $senha):void
    {
        $this->senha = $senha;
    }

    /**
     * Get the value of cpf
     */ 
    public function getCpf():string
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     */ 
    public function setCpf(string $cpf):void
    {
        $this->cpf = $cpf;
    }
}