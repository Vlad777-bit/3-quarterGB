<?php

class PostgreSqlQueryBuiler implements IQueryBuilerDB
{
    public function queryBuilerDB() : void
    {
        echo 'Отправлен запрос в PostgreSql <br>';
    }
}