<?php

class YandexMoney implements IPayment
{

    public function pay($amount, $phone): void
    {
        try
        {
            echo 'Оплата по Яндекс прошла успешно <br>';
        }
        catch (Exception $error)
        {
            echo "Ошибка при оплате Яндекс: " . $error->getMessage(), "\n";
        }
    }
}