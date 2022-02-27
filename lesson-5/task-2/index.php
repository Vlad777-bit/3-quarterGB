<?php

spl_autoload_register(function ($classname) {
    require_once ($classname.'.php');
});

$adapter = new Adapter();
$adapter->squareArea(5);
$adapter->circleArea(13);