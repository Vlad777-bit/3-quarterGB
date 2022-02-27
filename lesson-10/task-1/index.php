<?php

spl_autoload_register(function ($classname) {
    require_once $classname . ".php";
});

// задаем исходное математическое выражение
$str = "(x+10.2)^2+5*y-z";
$x = 2;
$y = 1;
$z = 3;

$parse = new Main();

// строительство дерева классов
$parse->builder($str);

echo $str . " = " . $parse->calc($x, $y, $z);

echo " при: x=" . $x . "; y=" . $y . "; z=" . $z;


