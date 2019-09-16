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

//方法一
$newarr = array();
foreach($arr as $key => $val){
    foreach($val as $k => $v){
        $newarr[$k][$key] = $v ;        //$newarr[0][name]
    };
};

echo "<pre>";
print_r($newarr);
echo "</pre>";