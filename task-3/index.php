<?php

spl_autoload_register(function ($classname) {
    require_once $classname . ".php";
});


$getAllProducts = new Product();
$products = $getAllProducts->fetchAll();
echo "fetchAll()";
var_dump($products);

echo "<hr>";

$othersProducts = new Product();
$findProducts = $othersProducts->search([5, 4, 2]);
echo "search([1, 3, 5])";
var_dump($findProducts);