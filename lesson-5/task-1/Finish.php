<?php

class Finish implements INotification
{
    public function send() : string
    {
        return 'Конец отправки';
    }
}
