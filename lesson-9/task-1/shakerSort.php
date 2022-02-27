<?php

/**
 * Шейковая сортировка 10 000 элементов, занимает 3.65 секунд
 * @param array $array
 * @return array
 */
function shakerSort(array $array): array
{
    $arrLength = count($array);
    $left = 0;
    $right = $arrLength - 1;
    do {
        for ($i = $left; $i < $right; $i++) {
            if ($array[$i] > $array[$i + 1]) {
                list($array[$i], $array[$i + 1]) = array($array[$i + 1], $array[$i]);
            }
        }
        $right -= 1;
        for ($i = $right; $i > $left; $i--) {
            if ($array[$i] < $array[$i - 1]) {
                list($array[$i], $array[$i - 1]) = array($array[$i - 1], $array[$i]);
            }
        }
        $left += 1;
    } while ($left <= $right);

    return $array;
}