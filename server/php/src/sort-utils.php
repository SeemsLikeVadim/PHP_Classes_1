<?php

function selection_sort($data)
{
    $n = count($data);
    $nextSwap = null;
    $temp = null;

    for ($i = 0; $i < $n - 1; $i++) {
        $nextSwap = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($data[$j] < $data[$nextSwap]) {
                $nextSwap = $j;
            }
        }

        $temp = $data[$i];
        $data[$i] = $data[$nextSwap];
        $data[$nextSwap] = $temp;
    }
    return $data;
}


