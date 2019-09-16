<?php
//第一题













// 把一维数组改为二维数组

$arr = array(
    'one' => 'aa',
    'two'=>'bb',
    'three'=>'cc'
);
$newarr = array();

    foreach($arr as $key =>$v){
      $newarr[] =array($key,$v);
    };
    echo "<pre>";
    print_r($newarr);
    echo "</pre>";

    unset($arr);
