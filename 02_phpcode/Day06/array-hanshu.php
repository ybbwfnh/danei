<?php
$arr = array('a','b','c','d');

//练习指针函数.获取值或数组

echo current($arr)."<br />";//a
echo reset($arr)."<br />";//a
echo next($arr)."<br />";  //b
echo prev($arr)."<br />";//移动回a
echo each ($arr)."<br />";  //是数组不显示 要用print_r
print_r(each($arr))."<br />";
echo current(each($arr))."<br />";

// list 练习
$arr1 = array('apple','pear','orange');
list($a,$b,$c)= $arr1;
echo $a.$b.$c;
echo "<br />";
reset($arr1); //把指针放在第一位.
//练习 list 和 each 配合 循环数组
while(list($k,$v)=each($arr1)){
    echo $v;
};
echo "<br />";
//第三种办法
foreach($arr1 as $k=>$v){
    echo $v."<br />";
}