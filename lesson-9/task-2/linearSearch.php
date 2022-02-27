<?php

/**
 * Функция для линейного поиска элемента в массиве
 * @param array $arr
 * @param mixed $el
 * @return array
 */
function linearSearch(array $arr, mixed $el): array
{
    $result = [];

    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] === $el) {
            $result[] = $i;
        }
    }

    return $result;
}