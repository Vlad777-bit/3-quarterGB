<?php

class MySqlFactory extends AbstractSqlFactory
{
    protected function getConnection() : IConnectDB
    {
        return new MySqlConnect();
    }

    protected function getQueryBuiler() : IQueryBuilerDB
    {
        return new MySqlQueryBuiler();
    }

    protected function getRecord() : IRecordDB
    {
        return new MySqlRecord();
    }
}