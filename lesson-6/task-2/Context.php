<?php

class Context
{
    private IPayment $strategy;

    public function __construct(IPayment $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(IPayment $strategy) : void
    {
        $this->strategy = $strategy;
    }

    public function toPay(float $amount, int $phone) : void
    {
        echo "Производиться оплата... <br>";
        $this->strategy->pay($amount, $phone);
    }
}