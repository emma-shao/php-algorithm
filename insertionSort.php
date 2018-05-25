<?php
/**
 * 插入排序
 * 将一个数据插入到已经排好序的有序数据中，从而得到一个新的、个数加一的有序数据，算法适用于少量数据的排序
 */
function insertionSort($numbers) {
    $cnt = count($numbers);
    for($i=0; $i<$cnt; $i++) {
        if ($i == 0) {
            $sorted = [$numbers[0]];
        }
        else {
            $j = $i - 1; // 已经排好序的数组长度
            while ($j >= 0) {
                if ($numbers[$i] < $sorted[$j]) {
                    $sorted[$j+1] = $sorted[$j];
                    $j--;
                } else {
                    break;
                }
            }
            $sorted[$j+1] = $numbers[$i]; // 算法还是挺难理解的，必须一步一步写出来才能理解
        }
    }
    return $sorted;
}

$num = [20,5,23,69,5,26,56,75];
print_r(insertionSort($num));