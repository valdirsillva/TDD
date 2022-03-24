<?php

namespace App\Src;

use DateTimeInterface;
use DateTimeImmutable;

use App\Src\DataValidadeCervejaException;

class ValidadeCerveja 
{
    private $dataVencimento;

    public function __construct(DateTimeInterface  $dataVencimento) 
    {
      
        $this->defineDataValidade($dataVencimento);
    }

    private function defineDataValidade(DateTimeInterface $dataVencimento): void 
    {
        $hoje =  new DateTimeImmutable();

        if ($dataVencimento < $hoje) {
            throw new DataValidadeCervejaException;
        }

        $this->dataVencimento = $dataVencimento;
        
    }

   
}