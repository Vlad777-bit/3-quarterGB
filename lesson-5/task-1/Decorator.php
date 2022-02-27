<?php

abstract class Decorator implements INotification
{
    protected $message = null;

    public function __construct(INotification $content)
    {
        $this->message = $content;
    }

    public function send() : string
    {
        return $this->message->send();
    }
}