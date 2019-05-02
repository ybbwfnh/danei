<?php
//小计算器
$num1 =' 9';
$num2 = 0;
$op = '/';

if(is_numeric($num1) && is_numeric($num2)){
    if($op == '+'){
        $res = $num1+$num2;
    }elseif($op == '-'){
        $res = $num1-$num2;
    }elseif($op == '*'){
        $res = $num1*$num2;
    }elseif($op =='/'){
        if($num2 !=0){
        $res = $num1/$num2;
        }else{
            die( '除数不能为0');
        }
    }else{
        die('非法字符必须是+-*/');
    };
}else{
    exit('必须是数字');
};

echo $num1.$op.$num2.'='.$res;
?>