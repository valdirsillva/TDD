<?php 

namespace App\Src;
use DateTimeImmutable;
use DateTimeInterface;

class Cliente 
{
    private $nome;
    private $email;
    private $dataNascimento;

    public function __construct(string $nome, DateTimeInterface $dataNascimento, Email $email) 
    {
       $this->defineNome($nome);
       $this->idadeValida($dataNascimento);
       $this->email = $email;
    }

    private function defineNome(string $nome): void 
    { 
        if (count(explode(' ', $nome)) < 2) {
            throw new NomeIncompletoException();
        } 
        
        $this->nome = $nome;
    }

    private function idadeValida(DateTimeInterface $dataNascimento): void 
    {   
        $idade = $this->calculaIdade($dataNascimento);
        $this->eMenorDeIdade($idade);
        $this->dataNascimento = $dataNascimento;
    }

    private function eMenorDeIdade($idade): void 
    {
        if ($idade < 18 ) {
            throw new ClienteDeMenorException();
        }
    }

    private function calculaIdade(DateTimeInterface $dataNascimento) 
    {
        $hoje = new DateTimeImmutable();
        $idade = $dataNascimento->diff($hoje)->y;

        return $idade;
    }
}