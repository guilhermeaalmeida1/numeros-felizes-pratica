<?php

namespace Tests\FelizesTest;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;
use src\Felizes\Felizes;

#[CoversClass(Felizes::class)]
class FelizesTest extends TestCase
{
    public function testSomatoriaIgualUm()
    {
        $this->assertEquals((new Felizes(1))->somaResultado(), 1);
    }

    public function testSomatoriaIgualUmComNumeroDois()
    {
        $this->assertEquals((new Felizes(2))->somaResultado(), false);
    }

    public function testSomatoriaIgualUmComNumeroTres()
    {
        $this->assertEquals((new Felizes(3))->somaResultado(), false);
    }

    public function testSomatoriaIgualUmComNumeroDez()
    {
        $this->assertEquals((new Felizes(10))->somaResultado(), 1);
    }

    #[TestWith([2, 4])]
    #[TestWith([3, 9])]
    #[TestWith([4, 16])]
    #[TestWith([5, 25])]
    public function testNumeroElevado($elevado, $resposta)
    {
        $this->assertEquals((new Felizes())->elevaNumero($elevado), $resposta);
    }

    public function testVazio()
    {
        $this->assertFalse((new Felizes())->somaResultado());
    }

}
