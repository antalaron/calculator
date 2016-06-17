<?php

namespace Antalaron\Calculator\Tests;

use Antalaron\Calculator\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->calculator = new Calculator();
    }

    /**
     * @dataProvider numbersProvider
     */
    public function testAdd($x, $y, $sum)
    {
        $this->assertEquals($sum, $this->calculator->add($x, $y));
    }

    public function numbersProvider()
    {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1.5, 1.5, 3],
            [1, 1, 2],
            [-1, -1, -2],
        ];
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testNotNumericExceptException()
    {
        $this->calculator->add('a', 'b');
    }

    public function tearDown()
    {
        unset($this->calculator);
    }
}
