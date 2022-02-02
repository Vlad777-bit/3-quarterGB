<?php

class SquareAreaLib
{
    public function getSquareArea(int $diagonal) : float | int
    {
        $area = ($diagonal**2) / 2;

        return $area;
    }
}