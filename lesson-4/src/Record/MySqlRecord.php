<?php

class MySqlRecord implements IRecordDB
{
    public function recordDB() : void
    {
        echo "Данные записаны в MySql <br>";
    }
}