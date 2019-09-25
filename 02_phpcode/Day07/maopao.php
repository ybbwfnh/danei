<?php
$arr = array(7,3);

if($arr[0]> $arr[1]){
    $tmp = $arr[0];
    $arr[0] = $arr[1];
    $arr[1] = $tmp;
}
echo "<pre>";
print_r($arr);
echo "</pre>";

unset($arr);

$arr = array(3,67,8,9,5,4,11,2);

//冒泡排序, 两两相比较,把最大的先沉到最后.
$count = count($arr);
for($i = 0;$i<$count-1 ; $i++){
    $tmp = $arr[$i];
    if($arr[$i]>$arr[$i+1]){
        $arr[$i]=$arr[$i+1];
        $arr[$i+1] = $tmp;
    }
    
}
echo "<pre>";
print_r($arr);
echo "</pre>";
//把剩下的数字也进入排序,利用一个FOR 进行外循环轮次

for($k = 1;$k<$count; $k++){
    for($i = 0; $i<$count-$k; $i++){
        $tmp =$arr[$i];
        if($arr[$i]>$arr[$i+1]){
        $arr[$i]=$arr[$i+1];
        $arr[$i+1]=$tmp;
        }
    }
}
echo '<pre>';
print_r($arr);
echo '</pre>';
