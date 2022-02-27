<?php

interface IVacancy
{
    public function addVacancy(string $vacancy) : void;
    public function respondToVacancy(IObserver $observer) : void;
    public function refuseVacancy(IObserver $observer) : void;
}