<?php 



namespace Tests\Src;

use App\Src\NomeIncompletoException;
use App\Src\ClienteDeMenorException;
use PHPUnit\Framework\TestCase;
use App\Src\Cliente;
use DateTimeImmutable;

use App\Src\Email;

class ClientTest extends TestCase 
{
    public function testClienteComApenasUmNome() 
    {   
        $this->expectException(NomeIncompletoException::class);

        $email = new Email('email@example.com');
        $dataNascimento = new DateTimeImmutable('2000-11-09');
        $cliente = new Cliente('Valdir', $dataNascimento, $email);
    }

    public function testClienteComNomeCompleto() 
    {    
        $dataNascimento = new DateTimeImmutable('2000-11-09');
        
        $email = new Email('email@example.com');
        $cliente = new Cliente('Valdir Silva', $dataNascimento, $email);
        $this->assertInstanceof(Cliente::class, $cliente);
    }

    public function testClienteMenorDeIdade() 
    { 
        $this->expectException(\ClienteDeMenorException::class);
        
        $email = new Email('email@example.com');
        $dataNascimento = new DateTimeImmutable('2000-11-09');
        $cliente = new Cliente('Valdir Silva', $dataNascimento, $email);
    }

   
}