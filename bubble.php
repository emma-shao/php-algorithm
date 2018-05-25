<?php
/**
 * 哇，自己竟然也会写冒泡排序算法
 * 重复地走过要排序的数列，一次比较两个元素，如果他们的顺序错误就把他们叫缓过来。
 * 走访数列的工作是重复的进行直到没有再需要交换，也就是说该数列已经排序完成
 *
 * 这个算法的名字由来是因为越大的元素会经由交换慢慢“浮”到数列的顶端，故名“冒泡排序”
 */
function bubbleSort($numbers) {
    $count = count($numbers);
    for ($i = 0; $i < $count; $i++) {
        for ($j = 0; $j < $count-1-$i; $j++) {
            if($numbers[$j] > $numbers[$j+1]) {
                $tmp = $numbers[$j];
                $numbers[$j] = $numbers[$j+1];
                $numbers[$j+1] = $tmp;
            }
        }
    }
    return $numbers;
}

$num = [20,5,23,69,5,26,56,75];
print_r(bubbleSort($num));