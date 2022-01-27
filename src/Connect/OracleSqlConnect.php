<?php

class OracleSqlConnect implements IConnectDB
{
    public function connectDB() : void
    {
        echo "Подключение к OracleSql <br>";
    }
}