<?php

/**
 * Возвращает перемешанный массив
 * @param array $arr
 * @return array
 */
function getRndArr(array $arr): array
{
    if (!shuffle($arr)) {
        return [];
    }

    return $arr;
}