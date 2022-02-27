<?php

class WebMoney implements IPayment
{

    public function pay(float $amount, int $phone): void
    {
        echo ($amount || $phone) ? 'Оплата по WebMoney прошла успешно <br>' : 'Ошибка при оплате: Данне отсутствуют <br>';
    }
}