<?php 


namespace Tests\Src;

use App\Src\ValidadeCerveja;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;
use App\Src\DataValidadeCervejaException;

class ValidadeCervejaTest extends TestCase 
{
    public function testDateNaoEValida() 
    {
        $this->expectException(DataValidadeCervejaException::class);
        
        $dataVencimento = new DateTimeImmutable('2005-01-01');
        $validadeCerveja = new ValidadeCerveja($dataVencimento);

    }
}