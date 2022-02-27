<?php

class OracleSqlFactory extends AbstractSqlFactory
{
    protected function getConnection() : IConnectDB
    {
        return new OracleSqlConnect();
    }

    protected function getQueryBuiler() : IQueryBuilerDB
    {
        return new OracleSqlQueryBuiler();
    }

    protected function getRecord() : IRecordDB
    {
        return new OracleSqlRecord();
    }
}