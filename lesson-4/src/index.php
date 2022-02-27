<?php

include "Factory/AbstractSqlFactory.php";
include "Factory/MySqlFactory.php";
include "Factory/OracleSqlFactory.php";
include "Factory/PostgreSqlFactory.php";

include "Connect/IConnectDB.php";
include "Connect/MySqlConnect.php";
include "Connect/OracleSqlConnect.php";
include "Connect/PostgreSqlConnect.php";

include "QueryBuiler/IQueryBuilerDB.php";
include "QueryBuiler/MySqlQueryBuiler.php";
include "QueryBuiler/OracleSqlQueryBuiler.php";
include "QueryBuiler/PostgreSqlQueryBuiler.php";

include "Record/IRecordDB.php";
include "Record/MySqlRecord.php";
include "Record/OracleSqlRecord.php";
include "Record/PostgreSqlRecord.php";

function connectDB(AbstractSqlFactory $connect)
{
    $connect->start();
}

$mySql = new MySqlFactory();
connectDB($mySql);

$oracleSql = new OracleSqlFactory();
connectDB($oracleSql);

$postgreSql = new PostgreSqlFactory();
connectDB($postgreSql);