<?php

class PostgreSqlFactory extends AbstractSqlFactory
{
    protected function getConnection() : IConnectDB
    {
        return new PostgreSqlConnect();
    }

    protected function getQueryBuiler() : IQueryBuilerDB
    {
        return new PostgreSqlQueryBuiler();
    }

    protected function getRecord() : IRecordDB
    {
        return new PostgreSqlRecord();
    }
}