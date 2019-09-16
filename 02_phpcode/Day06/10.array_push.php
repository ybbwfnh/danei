<?php
//练习 向数组中添加数值并返回长度.

$arr = array(
    'a',
    'b',
    'c',
    'd'
);
echo array_push($arr,'e','f');
echo "<br/>";
echo "<pre>";
print_r($arr);
echo "</pre>";

echo "<br/>";
 echo array_pop($arr);
 echo "<pre>";
print_r($arr);
echo "</pre>";