<?php

/**
 * Пызырьковая сортировка 10 000 элементов, занимает примерно 3.40 секунд
 * @param array $array
 * @return array
 */
function bubbleSort(array $array): array
{
    for ($i = 0; $i < count($array); $i++) {
        $count = count($array);
        for ($j = $i + 1; $j < $count; $j++) {
            if ($array[$i] > $array[$j]) {
                $temp = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $temp;
            }
        }
    }
    return $array;
}