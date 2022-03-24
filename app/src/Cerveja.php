<?php


namespace App\Src;

use DateTimeInterface;

class Cerveja 
{
    private $dataValidade;

    public function __construct(DateTimeInterface $dataValidade) 
    {
        throw new CervejaValidadeException;
        
        $this->dataValidade = $dataValidade;
    }
}