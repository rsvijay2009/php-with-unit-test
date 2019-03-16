<?php

use myapp\MathOperations;
use PHPUnit\Framework\TestCase;

class MathOperationsTest extends TestCase
{
    protected $MathOperations;

    public function setUp()
    {
        $this->MathOperations = new MathOperations();
    }

    /**
     * Test the functionality of Add function
     *
     * @covers \myapp\MathOperations::add
     *
     * @return mixed result
     */
    public function testCalculationOfAdd()
    {
        $a = 5;
        $b = 9;
        $result = $a + $b;
        $this->assertEquals($result, $this->MathOperations->add($a , $b));
    }

    /**
     * Test the functionality of subtract function
     *
     * @covers \myapp\MathOperations::subtract
     *
     * @return mixed result
     */
    public function testCalculationOfSubtract()
    {
        $a = 9;
        $b = 5;
        $result = $a - $b;
        $this->assertEquals($result, $this->MathOperations->subtract($a , $b));
    }

    /**
     * Test the functionality of multiply function
     *
     * @covers \myapp\MathOperations::multiply
     *
     * @return mixed result
     */
    public function testCalculationOfMultiply()
    {
        $a = 5;
        $b = 9;
        $result = $a * $b;
        $this->assertEquals($result, $this->MathOperations->multiply($a , $b));
    }

    /**
     * Test the functionality of division function
     *
     * @covers \myapp\MathOperations::divide
     *
     * @return mixed result
     */
    public function testCalculationOfDivide()
    {
        $a = 10;
        $b = 2;
        $result = $a / $b;
        $this->assertEquals($result, $this->MathOperations->divide($a , $b));
    }
}
