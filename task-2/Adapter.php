<?php

class Adapter implements ISquare, ICircle
{
    protected $library = null;

    public function squareArea(int $sideSquare)
    {
        $this->library = new SquareAreaLib();

        $squareRoot = sqrt($sideSquare ** 2);
        $diagonal = $squareRoot * 2;

        echo "Площадь квадрата = " . round($this->library->getSquareArea($diagonal), 2) . "<hr>";
    }

    public function circleArea(int $circumference)
    {
        $this->library = new CircleAreaLib();
        $diagonal = $circumference / M_PI;

        echo "Площадь круга = " . round($this->library->getCircleArea($diagonal), 2) . "<hr>";
    }
}