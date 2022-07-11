<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testIsSumCorrect()
    {
        $calc = new Calculator();
        $result = $calc->add(1, 2);
        $expected = 3;

        $this->assertSame($expected, $result);
    }
    public function testIsDifferenceCorrect()
    {
        $calc = new Calculator();
        $result = $calc->substract(3, 2);
        $expected = 1;

        $this->assertSame($expected, $result);
    }
    public function testIsProductCorrect()
    {
        $calc = new Calculator();
        $result = $calc->multiply(3, 3);
        $expected = 9;

        $this->assertSame($expected, $result);
    }
    public function testIsQuotientCorrect()
    {
        $calc = new Calculator();
        $result = $calc->divide(4, 2);
        $expected = 2;

        $this->assertSame($expected, $result);
    }
}
