<?php
//重新排列数组,变成正常的方式.
$arr = array(
    'name' => array(
            '张三',
            '李四',
            '王五',
            
    ),
    'age' => array(
        18,
        19,
        20
    ),
    'sex' => array(
        '男',
        '女',
        '不男不女'
    ),
    'add' => array(
        '北京',
        '哈尔滨',
        '杭州'
    )
);

//方法一  循环12次
$newarr = array();
foreach($arr as $key => $val){
    foreach($val as $k => $v){
        $newarr[$k][$key] = $v ;        //$newarr[0][name]
    };
};

echo "<pre>";
print_r($newarr);
echo "</pre>";
echo "<hr/>";

//方法二,循环3次. 原理,借用老数组中的定位.实现新数组的便利 .最常用方式
unset($newarr);

$newarr = array();
foreach($arr['name'] as $k =>$v){
    $newarr[$k]['name'] = $v;
    $newarr[$k]['age'] = $arr['age'][$k];
    $newarr[$k]['sex'] = $arr['sex'][$k];
    $newarr[$k]['add'] = $arr['add'][$k];
}

echo "<pre>";
print_r($newarr);
echo "</pre>";