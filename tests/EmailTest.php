<?php 


namespace Tests\Src;

use App\Src\Email;

use PHPUnit\Framework\TestCase;

use App\Src\InvalidArgumentException;

class EmailTest extends TestCase 
{
    public function testEmailInvalido() 
    {
        $this->expectException(\InvalidArgumentException::class);

        $email = new Email('Teste');
    }

    public function testEmailValidoComoString() 
    {
        $email = new Email('email@gmail.com');

        $this->assertEquals('email@gmail.com', $email);
    }
}