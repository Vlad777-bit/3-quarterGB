<?php

class Qiwi implements IPayment
{
    public function pay(float $amount, int $phone): void
    {
        try
        {
            if (!($amount || $phone))
            {
                throw new Exception('Данне отсутствуют');
            }

            echo 'Оплата по Qiwi прошла успешно <br>';
        }
        catch (Exception $error)
        {
            echo "Ошибка при оплате Qiwi: " . $error->getMessage(), "\n";
        }
    }
}