<?php

include_once "./getRndArr.php";

include_once "./bubbleSort.php";
include_once "./shakerSort.php";
include_once "./quickSort.php";


$bigArr = getRndArr(range(1, 10000));

$start = microtime(true);

$sortedArr = bubbleSort($bigArr); // 3.40с
//$sortedArr = shakerSort($bigArr); // 3.65c
//$sortedArr = quickSort($bigArr, 1, 9999); // 0.15c

$end = microtime(true);

echo round(($end - $start), 3);;