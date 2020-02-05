<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class CalcTest extends TestCase
{
    public function testSimpleSum(): void
    {
        $this->assertEquals(2,(new Calc(1,1))->sum());
        $this->assertEquals(2.1,(new Calc(1.1,1))->sum());
        $this->assertEquals(1,(new Calc(0,1))->sum());
        $this->assertEquals(0,(new Calc(0,0))->sum());
        $this->assertEquals(6,(new Calc(5,1))->sum());
    }

    public function testSimpleDivide(): void
    {
        $this->assertEquals(2,(new Calc(4,2))->divide());
        $this->assertEquals(4,(new Calc(4,1))->divide());
        $this->assertEquals(1,(new Calc(4,4))->divide());
    }


    public function testSimpleMinus(): void
    {
        $this->assertEquals(2,(new Calc(4,2))->minus());
        $this->assertEquals(3,(new Calc(4,1))->minus());
        $this->assertEquals(0,(new Calc(4,4))->minus());
    }

}