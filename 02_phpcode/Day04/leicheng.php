<?php

// 累乘小算法.计算出1*2*3*4*5*6 的结果
$sum = 1;
for($i = 1;$i <=6; $i++){
    $sum *= $i;
}
echo $sum;