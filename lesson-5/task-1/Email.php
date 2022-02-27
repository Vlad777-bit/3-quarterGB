<?php

class Email extends Decorator
{
    public function send() : string
    {
        return "Уведомить через Email <br>" . parent::send();
    }
}