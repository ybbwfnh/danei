<?php
//常量的定义
define('USER','tom');
define('PWD','234322');
echo '<br />';
//常量的输出
echo USER;
echo "<br />";
echo constant('PWD');
echo "<br/>";
//函数调用方式
function test(){
    echo USER;
}
test();