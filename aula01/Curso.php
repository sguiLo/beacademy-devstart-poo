<?php 

declare(strict_types=1);


class Curso 
{
    private string $turno;
    private float $cargaHoraria;
    private string $modalidade;

    public function getTurno(): string
    {
        return $this->turno;
    }

    public function setTurno(string $novoTurno): void 
    {
        $this->turno = $novoTurno;
    }

    public function getCarga(): float
    {
        return $this->cargaHoraria;
    }

    public function setCarga(float $novaCarga): void 
    {
        $this->cargaHoraria = $novaCarga;
    }

    public function getModalidade():string
    {
        return $this->modalidade;
    }

    public function setModalidade(string $novaModalidade): void 
    {
        $this->modalidade = $novaModalidade;
    }
};
