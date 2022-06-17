<?php

declare(strict_types=1);

class Cliente extends Usuario
{
    private string $dataCadastro;

    /**
     * Get the value of dataCadastro
     */ 
    public function getDataCadastro():string
    {
        return $this->dataCadastro;
    }

    /**
     * Set the value of dataCadastro
    */
    public function setDataCadastro(string $dataCadastro):void
    {
        $this->dataCadastro = $dataCadastro;
    }
}