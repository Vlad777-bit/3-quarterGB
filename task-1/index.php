<?php

spl_autoload_register(function ($classname)
{
    require_once ($classname.'.php');
});

function clientCode(INotification $typeOfNotification) : void
{
    echo $typeOfNotification->send();
}

$smsNotification = new Sms(new Finish());
clientCode($smsNotification);

echo '<hr>';

$emailNotification = new Email(new Finish());
clientCode($emailNotification);

echo '<hr>';

$cn = new CN(new Finish());
clientCode($cn);

echo '<hr>';

$combo = clientCode(new CN(new Email(new Sms(new Finish()))));
