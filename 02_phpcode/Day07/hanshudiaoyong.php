<?php
//把日常使用的用funciton套起来, 使用时直接写函数名字即可.
function getweek(){
$week = date('w');
$arr = array('星期日','星期一','星期二','星期三','星期四','星期五','星期六',);
echo $arr[$week]; //实际中不可以这样输出,要使用retrun到外面,在echo getweek();
}
getweek();
echo '<hr />';
getweek();

echo '<hr/>';
//求和算法
/**
 * @
 */
$sum=0;
for($i=1;$i<=100;$i++){
    $sum+=$i;
}
echo $sum."<hr />";
//算法封装,增加必选参数和可选参数
function getsum($n,$m=1){  //从1+到100,增加参数之后记为从1+到你想要的数字. $m为从及开始加
    $su=0;
for($i=$m;$i<=$n;$i++){
    $su+=$i;  
}
return $su;
}
$ss = getsum(90,12);
// echo getsum(90,1);
echo $ss;

echo '<br/>';

$n = 7;
function test(){
    $n=12;
    return $n;
}
$n= test();
echo $n;

echo '<hr/>';
echo "全局变量的3中声明方法<br/>";
// 方法一
$n =7;
function test2(){
    global $n;
    $n = 12;
    return $n;
};
test2();
echo $n;
echo '<hr/>';

//方法二. 
$n = 7;
function test3(){
    $GLOBALS['n'] =13;
}
test3();
echo $n;
echo '<hr/>';
//方法3 引用传递  把指针指向同一个地址.
$n =7;
function test4(&$n){
    $n = 14;
}
test4($n);
echo $n;
echo '<hr/>';

