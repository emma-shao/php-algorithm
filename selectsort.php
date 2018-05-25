<?php
/**
 * 选择排序算法，是一种不稳定的排序算法
 * 每一次从待排序的数据元素中选出最小的一个元素，存放在序列的起始位置，知道全部待排序的数据元素排完
 */
function selectSort($numbers) {
    $cnt = count($numbers);
    for($i=0; $i<$cnt-1; $i++) {
        $min = $i;
        for($j=$i+1; $j<$cnt; $j++) {
            if ($numbers[$j] < $numbers[$min]) {
                $min = $j;
            }
        }
        if ($min != $i) {
            $tmp = $numbers[$min];
            $numbers[$min] = $numbers[$i];
            $numbers[$i] = $tmp;
        }
    }
    return $numbers;
}

$num = [20,5,23,69,5,26,56,75];
print_r(selectSort($num));