<?php

class PostgreSqlRecord implements IRecordDB
{
    public function recordDB() : void
    {
        echo "Данные записаны в PostgreSql <br>";
    }
}