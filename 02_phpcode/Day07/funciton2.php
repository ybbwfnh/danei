<?php
/**
 * 通过函数,计算多个数的平均值,并且不被参数个数限制.
 * 
 */
function getavg(){
    $num = func_num_args();
    $arr = func_get_args();
    $sum = 0;
    foreach($arr as $v){
        $sum +=$v;
    }
    return round($sum/$num,2);
}
echo getavg(22,1,32);

echo '<hr/>';
//判断 函数名是否存在.

var_dump(function_exists('getavg'));  //boll(true)存在.
echo '<hr/>';
//变量函数调用
$a = 'hELLO WORD';
echo strtolower($a);
echo '<br/>';
$fn = 'strtolower';  //函数名称被赋值给变量.但也能正常被解析.
echo $fn($a); 
echo '<hr/>';
//将回调函数应用到每一个数组的单元格上.
function arrayMap($fn,$arr){
    $newarr = array();
    foreach($arr as $v){
        $newarr[] =$fn($v);
    }
    return $newarr;
}
$arr = array('Hello','rED','YELLow');
echo '<pre>';
print_r(arrayMap('strtolower',$arr));
echo '</pre>';