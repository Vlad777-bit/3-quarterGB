<?php

interface IObserver
{
    public function subscribeToNotification(string $vacancy) : void;
    public function unsubscribeFromNotification(string $vacancy) : void;
}