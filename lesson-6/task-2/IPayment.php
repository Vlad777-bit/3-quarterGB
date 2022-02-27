<?php

interface IPayment
{
    public function pay(float $amount, int $phone) : void;
}