<?php

/**
 * Функция для удаления найденого элемента
 * @param array $arr
 * @param array $el
 * @return array
 */
function removeElFromArr(array $arr, array $el): array
{
    if (count($el) >= 1) {
        for ($i = 0; $i < count($el); $i++) {
            unset($arr[$el[$i]]);
        }
    }

    return $arr;
}