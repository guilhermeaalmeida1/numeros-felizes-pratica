<?php

namespace Tests\HappyTest;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;
use src\Happy\Happy;

#[CoversClass(Happy::class)]
class HappyTest extends TestCase
{
    public function testSumEqualsOne()
    {
        $this->assertEquals((new Happy(1))->sumResult(), 1);
    }

    public function testSumEqualsOneWithNumberTwo()
    {
        $this->assertEquals((new Happy(2))->sumResult(), false);
    }

    public function testSumEqualsOneWithNumberThree()
    {
        $this->assertEquals((new Happy(3))->sumResult(), false);
    }

    public function testSumEqualsOneWithNumberTen()
    {
        $this->assertEquals((new Happy(10))->sumResult(), 1);
    }

    #[TestWith([2, 4])]
    #[TestWith([3, 9])]
    #[TestWith([4, 16])]
    #[TestWith([5, 25])]
    public function testPowNumber($number, $answer)
    {
        $this->assertEquals((new Happy())->powNumber($number), $answer);
    }

    public function testEmpty()
    {
        $this->assertFalse((new Happy())->sumResult());
    }

}
