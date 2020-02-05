<?php
final class Calc
{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function sum()
    {
        return $this->a + $this->b;
    }
    public function divide()
    {
        return $this->a / $this->b;
    }
}