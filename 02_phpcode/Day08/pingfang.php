<?php
//递归平方


function arraymap($fn,$arr){
    $newarray = array();
    foreach($arr as $k=>$v){
        $newarray[$k] = is_array($v)? arraymap($fn,$v):$fn($v);
    }
    return $newarray;
}
$arr = array(
    2,
    4,
    5,
    6,
    array(33,22)
        );
$newarray = arraymap('getpow',$arr);
echo "<pre>";
print_r($newarray);
echo "</pre>";


function getpow($n){
    return $n*$n;
            };