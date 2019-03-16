<?php

namespace myapp;

class MathOperations
{
    /**
     * Calculate the addition of two numbers
     * @param mixed $a, $b
     * @return mixed addition
     */
    public function add($a, $b)
    {
        return $a + $b;
    }

    /**
     * Calculate the subtraction of two numbers
     * @param mixed $a, $b
     * @return mixed subtraction
     */
    public function subtract($a, $b)
    {
        return $a - $b;
    }

    /**
     * Calculate the multiplication of two numbers
     * @param mixed $a, $b
     * @return mixed multiplication
     */
    public function multiply($a, $b)
    {
        return $a * $b;
    }

    /**
     * Calculate the division of two numbers
     * @param mixed $a, $b
     * @return mixed division
     */
    public function divide($a, $b)
    {
        return $a / $b;
    }
}
