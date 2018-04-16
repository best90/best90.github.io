<?php

function bubble_sort(array $array) : array
{
    $count = count($array);
    if ($count == 0) {
        return [];
    }

    for ($i = 0; $i < $count; $i++) {
        for ($j = 0; $j < $count-1-$i; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}

var_dump(bubble_sort([6, 3, 8, 2, 9, 1]));