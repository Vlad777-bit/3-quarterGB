<?php

class Sms extends Decorator
{
    public function send() : string
    {
        return "Уведомить через Sms <br>" . parent::send();
    }
}
