<?php
/**
 * 堆排序
 * 突然有一个想法，或许堆排序用js实现更有天然优势，因为前端后端通吃的语言
 * 前端与后端使用的类库与侧重点不一样罢了
 * 前端要想展示清楚，似乎并不容易，前端有机会自己练习下吧
 * 现在是清楚的掌握了堆排序
 * 
 * 将初始待排序关键字序列[R1,R2...Rn]构建成大顶堆，此堆为初始的无序区
 * 将堆顶元素[R1]与最后一个元素Rn交换，此时得到新的无序区[R1,R2...Rn-1]和新的有序区(Rn)且满足R[1,2...n-1]<R[n];
 * 由于交换后的顶堆R1可能违反堆的性质，因此需要堆当前无序区(R1,R2...Rn-1)调整为新堆，
 * 然后再将R[1]与无序区最后一个元素交换，得到新的无序区(R1,R2...Rn-2)和新的有序区(Rn-1,Rn)。
 * 不断重复此过程知道有序区的元素个数为n-1，则整个排序过程完成。
 */
function heapSort($numbers) {
    $cnt = count($numbers);
    $times = 0;
    for ($j=0; $j<$cnt; $j++) {
        echo "第{$times}遍\n";
        for($i=$cnt-$j-1; $i>=0; $i--) {
            $parent = floor(($i-1)/2);
            if ($parent < 0) {
                break;
            } elseif ($numbers[$parent] < $numbers[$i]) {
                swap($numbers, $parent, $i);
            }
            $times++;
        }
        swap($numbers, 0, $cnt-$j-1);
    }
    return $numbers;
}

function swap(&$arr, $i, $j) {
    $tmp = $arr[$j];
    $arr[$j] = $arr[$i];
    $arr[$i] = $tmp;
}

$num = [20,5,23,69,5,26,56,75,9,24,5,66,364,80,92];
print_r(heapSort($num));