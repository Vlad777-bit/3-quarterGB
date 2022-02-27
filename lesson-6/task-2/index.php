<?php

spl_autoload_register(function ($class) {
    include $class . '.php';
});

$qiwi = new Context(new Qiwi());
$qiwi->toPay(25.7,23425);

echo "<hr>";

$yandex = new Context(new YandexMoney());
$yandex->toPay(12.54, 3252);
echo "<br>";
$yandex->setStrategy(new Qiwi());
$yandex->toPay(242, 3466);

echo "<hr>";

$webMoney = new Context(new WebMoney());
$webMoney->toPay(234.56, 454645);