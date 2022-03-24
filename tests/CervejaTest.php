<?php


namespace Tests\Src;

use App\Src\ValidadeCerveja;
use DateTimeImmutable;
use App\Src\CervejaValidadeException;
use PHPUnit\Framework\TestCase;


class CervejaTest extends TestCase 
{
    public function testDataValidadeCerveja() 
    {
        $this->expectException(CervejaValidadeException::class);

        $cerveja  = new ValidadeCerveja(new DateTimeImmutable('2022-03-22'));
    }
}