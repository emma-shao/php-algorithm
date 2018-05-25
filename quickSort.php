<?php

/**
 * 快速排序
 */

function quickSort(&$numbers) {
    $left = [];
    $right = [];
    $len = count($numbers);
    $pivot = $numbers[0];
    $middle = [$pivot];
    if ($len > 1) {
        for($i=1; $i<$len; $i++) {
            if ($numbers[$i] < $pivot) {
                $left[] = $numbers[$i];
            } elseif ($numbers[$i] > $pivot ) {
                $right[] = $numbers[$i];
            } else {
                $middle[] = $pivot; 
            }            
        }
        $numbers = array_merge($left, $middle, $right);
        quickSort($left);
        quickSort($right);
    }
}

$num = [20,5,23,69,5,26,56,75];
quickSort($num);
print_r($num);