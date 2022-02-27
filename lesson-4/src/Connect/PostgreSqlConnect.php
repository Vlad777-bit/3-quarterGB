<?php

class PostgreSqlConnect implements IConnectDB
{
    public function connectDB() : void
    {
        echo "Подключение к PostgreSql <br>";
    }
}