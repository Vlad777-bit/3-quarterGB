<?php

spl_autoload_register(function ($class) {
    include $class . '.php';
});

$john = new Seeker('John', 'john@yandex.ru', 5);
$masha = new Seeker('Masha', 'maria@bk.ru', 1.5);

$john->subscribeToNotification('phpDev');
$masha->subscribeToNotification('phpDev');

var_dump(PhpDeveloper::getInstance()->observers);

$masha->unsubscribeFromNotification('phpDev');

var_dump(PhpDeveloper::getInstance()->observers);

$new = new CreateVacancy("programmerPHP", "Новая волна");
$new = new CreateVacancy("programmerPHP","It-incubator");

