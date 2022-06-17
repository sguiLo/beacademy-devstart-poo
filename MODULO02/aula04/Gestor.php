<?php

declare(strict_types=1);

class Gestor extends Usuario
{
    private float $salario;
    private string $horario;

    public function __construct(string $email, string $senha, float $salario)
    {
        parent::setEmail($email);
        parent::setSenha($senha);
        $this->salario = $salario;
    }

    /**
     * Get the value of salario
     */ 
    public function getSalario():float
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     */ 
    public function setSalario(float $salario):void
    {
        $this->salario = $salario;
    }

    /**
     * Get the value of horario
     */ 
    public function getHorario():string
    {
        return $this->horario;
    }

    /**
     * Set the value of horario
     */ 
    public function setHorario(string $horario):void
    {
        $this->horario = $horario;
    }
}