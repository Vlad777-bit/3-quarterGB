<?php

/**
 * Быстрая сортировка, занимает примерно 0.15 секунд
 * @param $arr
 * @param $low
 * @param $high
 * @return array
 */
function quickSort(array &$arr, int $low, int $high): array
{
    $i = $low;
    $j = $high;
    $middle = $arr[($low + $high) / 2];
    do {
        while ($arr[$i] < $middle) ++$i;
        while ($arr[$j] > $middle) --$j;
        if ($i <= $j) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
            $i++;
            $j--;
        }
    } while ($i < $j);

    if ($low < $j) {
        quickSort($arr, $low, $j);
    }

    if ($i < $high) {
        quickSort($arr, $i, $high);
    }

    return $arr;
}