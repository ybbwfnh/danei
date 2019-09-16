<?php
//二维数组练习
$arr = array('a',
                'b',
                array(
                    'one',
                    'two',
                    'three'
                ));

echo $arr[2][1];

echo '<hr />';
//二维数组(多维数组)
//方法一:
  //  嵌套关系,array('a',array('b','c'));
  //  重要: 定义二维数组(索引+关联) 外索引,内关联
                $arr = array(
                    0=> array('name'=>'张三','age'=>12,'add'=>'北京'),
                    1=> array('name'=>'李四','age'=>13,'add'=>'天津'),
                    2=> array('name'=>'王五','age'=>15,'add'=>'上海'),
                );
    echo "<pre>";
    print_r($arr);
    echo '</pre>';
// 方法二:
    // 添加发
$arr2 = array();//初始化

$arr2[] = array('name'=>'张三','age'=>12,'add'=>'北京');
$arr2[] = array('name'=>'李四','age'=>13,'add'=>'天津');
$arr2[] = array('name'=>'王五','age'=>15,'add'=>'上海');
echo "<pre>";
print_r($arr2);
echo '</pre>';
echo '<br />';

//方法三:
//逐行添加
$arr3 = array();
$arr3[0]['name'] = '张三';
$arr3[0]['age'] = 12;
$arr3[0]['add'] = '北京';
$arr3[1]['name'] = '李四';
$arr3[1]['age'] = 13;
$arr3[1]['add'] = '天津';
$arr3[2]['name'] = '王五';
$arr3[2]['age'] = 15;
$arr3[2]['add'] = '上海';

echo "<pre>";
print_r($arr3);
echo "</pre>";
echo '<hr />';

//循环取出数据
//方法一:嵌套数组, 循环次数12,不可取. 

foreach($arr3 as $val){
    foreach($val as $k=>$v){
        echo $v."&nbsp;";
    }
};

//方法二: 单层遍历 循环次数3次.下标方式
echo "<br>";
foreach($arr3 as $val){
    echo $val['name'].$val['age'].$val['add'];
}