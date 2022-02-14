<?php

//$n = 100; $array[]= [];
//$count = 0;
//for ($i = 0; $i < $n; $i++) {
//    $count += 1;
//    for ($j = 1; $j < $n; $j *= 2) {
//        $count += 1;
//        $array[$i][$j]= true;
//    }
//}               // сложность как мне кажется будет O(n * log(n)
//echo $count;    // 800 итераций

$n = 100;
$count = 0;
$array[] = [];

for ($i = 0; $i < $n; $i += 2) {
    $count += 1;
    for ($j = $i; $j < $n; $j++) {
        $count += 1;
        $array[$i][$j]= true;
    }
}
                // сложность O(log(n^2))
echo $count;    // 2600 итераций
