<?php

class MySqlConnect implements IConnectDB
{
    public function connectDB() : void
    {
        echo "Подключение к MySql <br>";
    }
}