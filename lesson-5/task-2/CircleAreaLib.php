<?php

class CircleAreaLib
{
    public function getCircleArea(int $diagonal) : float | int
    {
        $area = (M_PI * ($diagonal**2)) / 4 ;

       return $area;
   }

}