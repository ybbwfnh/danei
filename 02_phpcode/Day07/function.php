<?php
//动态局部变量于静态局部变量对比

function fn1(){
    $a = 0;
    $a++;
    echo $a; //测试输出
}
fn1(); //调取3次 动态变量在使用完函数 下次从头开始,所以结果是1.1.1
echo '<hr/>';
fn1();
echo '<hr/>';
fn1();
echo '<hr/>';

function fn2(){
    static $a = 0;
    $a++;
    echo $a;
}
fn2();
echo '<hr/>';
fn2();
echo '<hr/>';
fn2();
echo '<hr/>';  //执行3次,结果1,2,3 实现简单计数

// 获得当前文件的根相对路劲 /开头

echo $_SERVER['REQUEST_URI'];
echo '<br/>';
echo $_SERVER['PHP_SELF'];

// 练习 ,实现 查找值在数组中是否存在 in_array函数功能
//in_array ( mixed $needle , array $haystack [, bool $strict = FALSE ] ) : bool

$var = 'b';
$arr = array('a','b','c','d');

function inArray($n,$arr){
    foreach($arr as $v){
        if($v ==$n){
            return true;
        }
    }
    return false;
}
var_dump(inArray($var,$arr));
echo '<hr/>';


// 升级练习,严格比较
$var = 'true';
$arr = array('a','b','c','d');

function inArray2($n,$arr,$strict=false){
    if($strict === true){
    foreach($arr as $v){
        if($v === $n){
            return true;
        }
    }
}else{
    if($strict == true){
        foreach($arr as $v){
            if($v ==$n){
                return true;
            }
        }
    }
    
}
return false;
}
var_dump(inArray2($var,$arr,true));
echo '<hr/>';

//获取文件的扩展名
function getext($n){
   return substr($n,strrpos($n,'.')+1);
}

$str = '1.jpg.png.gif';
echo getext($str);

// 在做一次
echo '<br/>';

$nn = 'a.jpg';
function filename($n){
       return substr($n,strrpos($n,'.')+1);
    }
echo filename($nn);