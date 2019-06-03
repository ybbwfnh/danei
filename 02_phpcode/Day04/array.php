<?php
echo "索引数组<br>";
$arr = array('13','22','fdsa');
print_r($arr);

echo "<hr>";
echo "省略键值方法<br>";
$arr[] = 'abc';
$arr[] = '大麻花';
print_r($arr);
echo "<br>发现问题,累计了上次案例.所以要设定一个空数组清空.如下<br>";
$arr = array();
$arr[] = 'abc';
$arr[] = '大麻花';
print_r($arr);
echo "<br>";
echo "自定义数组<br>";
$arr = array(
    29 =>'女',
    18=>'男',
    99=> '骆驼'
);
print_r($arr);
echo '<br>';
echo "格式化关联数组";
echo "<pre>";
print_r($arr);
echo "<pre>";
echo "关联数组,也叫自定义数组<br>";
$arr = array(
    '地址'=>'北京',
    '年龄'=>'18'
);
print_r($arr);