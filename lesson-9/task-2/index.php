<?php

include_once "../task-1/bubbleSort.php";

include_once "./linearSearch.php";
include_once "./removeElFromArr.php";

$someArr = ['one', true, 54, 'два', true, false, 3, 'one', 466, 3];
$sortedArr = bubbleSort($someArr);

print_r(removeElFromArr($sortedArr, linearSearch($sortedArr, 3)));