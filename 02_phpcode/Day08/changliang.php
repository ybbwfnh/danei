<?php
//  1)PHP_INT_MAX 获得证书最大值
echo PHP_INT_MAX;
echo "<br>";
//  2)PHP_VERSION php版本
echo PHP_VERSION;
echo "<br>";
//  3)PHP_OS 服务器操作系统是什么
echo PHP_OS;
echo "<br>";

// 2.3 魔术常量
//     1)_LINE_ :获得当前代码行号,在第几行.
echo  __LINE__;
echo "<br>";
//     2)_FILE_ :获得当前文件的绝对路径.
echo __FILE__;
echo "<br>";
//     3)_DIR_ : 获得当前文件所在目录的绝对路径.
echo __DIR__;
echo "<br>";
//     4)_FUNCITON_ :获得当前函数名称.
//在做递归函数的时候必须用到这个获取到函数名称, 减少内存价差次数. 例如:
function istest($n){
    $nname = __FUNCTION__;
    if($n<=1){
        return 1;
    }
    return $n*$nname($n -1);
}
echo istest(5);




//     5)_CLASS_ :获得当前类名称.
//     6)_METHOD_ :获得当前类的函数,也叫获得当前方法的名称.
//     7)_NAMESPACE_ :获得当前明明空间的名称.

//最后作业
//查找2个数组中同时存在的数字组成新的数组.

echo '<br />';
function isSmalier($arr111,$arr222){
    $newarr = array();
    foreach($arr111 as $v){
        if(in_array($v,$arr222,true)){
            $newarr[] = $v;
        }
    }
        return $newarr;
};
$arr111 = array(1,3,4,5,6,7,44,23);
$arr222 = array(1,4,5,6,11,22,44);

$newarr = isSmalier($arr111,$arr222);

var_dump($newarr);

echo "<hr />";

//用魔术常量来写 递归
//求1-5 的乘积.

function issum($fn){
  $y = __FUNCTION__;  //代替递归调用自己,提高效率.
    if($fn <=1){
        return 1*1;
    }
    return $fn*$fn + $y($fn-1);
};
echo issum(5);