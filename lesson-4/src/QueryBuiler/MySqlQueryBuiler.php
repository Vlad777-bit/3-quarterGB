<?php

class MySqlQueryBuiler implements IQueryBuilerDB
{
    public function queryBuilerDB() : void
    {
        echo 'Отправлен запрос в MySql <br>';
    }
}