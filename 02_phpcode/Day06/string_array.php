<?php
//有规律字符串转数组.

$arr = 'a*b*c*d*e';

$newarr = explode('*',$arr,4);

echo "原有字符串是:".$arr;
echo "<pre>";
print_r($newarr);
echo "</pre>";