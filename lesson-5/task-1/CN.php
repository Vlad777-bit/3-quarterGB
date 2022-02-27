<?php

class CN extends Decorator
{
    public function send(): string
    {
        return 'Уведомить через Chrome Notification <br>' . parent::send();
    }
}