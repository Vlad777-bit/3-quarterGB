<?php

abstract class AbstractSqlFactory
{
    private IConnectDB $connect;
    private IQueryBuilerDB $queryBuiler;
    private IRecordDB $record;

    public function __construct()
    {
        $this->connect = $this->getConnection();
        $this->queryBuiler = $this->getQueryBuiler();
        $this->record = $this->getRecord();
    }

    public function start()
    {
        echo "Запуск фабрики <br>";
        $this->connect->connectDB();
        $this->queryBuiler->queryBuilerDB();
        $this->record->recordDB();
    }

    abstract protected function getConnection() : IConnectDB;
    abstract protected function getRecord() : IRecordDB;
    abstract protected function getQueryBuiler() : IQueryBuilerDB;
}