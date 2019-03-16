<?php

use myapp\Average;
use PHPUnit\Framework\TestCase;

class AverageTest extends TestCase
{
    protected $Average;

    public function setUp()
    {
        $this->Average = new Average();
    }

    /**
     * Test the CalculationOfMean function
     *
     * @covers \myapp\Average::mean
     *
     * @return bool
     */
    public function testCalculationOfMean()
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(4.4, $this->Average->mean($numbers));
    }

    /**
     * Test the CalculationOfMedian function
     *
     * @covers \myapp\Average::median
     *
     * @return bool
     */
    public function testCalculationOfMedianForOddNoOfElements()
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(5, $this->Average->median($numbers));
    }

    /**
     * Test the CalculationOfMedian function
     *
     * @covers \myapp\Average::median
     *
     * @return bool
     */
    public function testCalculationOfMedianForEvenNoOfElements()
    {
        $numbers = [3, 7, 6, 1, 5, 8];
        $this->assertEquals(5.5, $this->Average->median($numbers));
    }
}
