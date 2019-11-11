<?php
/**
 * 函数封装,
 * 1.将一维数组转为字符串(等同于JOIN)
 * 2.获得变量在数组中对应的索引键值
 * $str = 'c'
 * $arr = array('a','b','c','d')
 * mixed 返回值 成功返回编号,失败返回false
 * 3.$str = 'c'
 * $arr = array('a','b','c','d')
 * 删除变量对应在数组中的值 并返回数组
 */
$str = 'c';
$arr = array('a','b','c','d');
echo join('',$arr)."<br />";

foreach($arr as $k => $v){
    print_r( $v);
}
echo '<hr />';


//答案
/**
 * @param Array $arr
 * @param string $glue;
 */
function getjoin($glue,$arr){
    $link = '';
    foreach($arr as $v){
        if(empty($link)){
            $link.=$v;
        }else{
            $link.=$glue.$v;
        }
            
    }
 return $link;
}
echo getjoin('*',$arr);

echo '<hr/>';
//第二题
function getindex($n,$arr){
    foreach($arr as $k =>$v){
        if($n === $v){
            return $k;
        }
        
    }
    return false;
}
$str = 'c';
$arr = array('a','b','c','d');
var_dump(getindex($str,$arr)) ;
echo '<hr />';

//加深题,利用计数法. 计算关联数组
function getnum($n,$arr){
    $num = 1;
    foreach($arr as $k=>$v){
        if($n===$v){
            return $num;
        }
        $num++;
    }
}
$str = 'c';
$arr = array('one'=>'a','two'=>'b','three'=>'c','for'=>'d');

echo getnum($str,$arr);
echo '<hr/>';

//加深题, 找到值病删除它. 排除法
 function getvoldelete($n,$arr){
     $newarr = array();
     foreach($arr as $k=>$v){
        if($n!==$v){
            $newarr[$k] = $v;
        }
     }
     return $newarr;
 }

$str = 'c';
$arr = array('a','b','c','d');
 print_r(getvoldelete($str,$arr));
 echo '<br/>';
 //加深题, 找到值病删除它. 删除法  还可以直接在funciton中 给$arr 前面加上&, 让他们指向同一个内存位置. 达到不需要反值的目的
function getvoldelete2($n,$arr){ 
    foreach($arr as $k=>$v){
        if($n===$v){
            unset($arr[$k]);
        }
    }
    return $arr;
}
$str = 'c';
$arr = array('a','b','c','d');
print_r(getvoldelete2($str,$arr));


//小练习, 把数组中的 字符串,转换成大写. 用回调函数的形式.
function arraymap($fn,$arr){
    $newarr = array();
    foreach($arr as $v){
        $newarr[] = $fn($v);
    }
    return $newarr;
};
$arr = array(1,2,3,4);
$a = arraymap('strtoupper',$arr);
print_r($a);
echo '<hr>';

//小练习,自定义回调函数的应用.配合上面的使用
//求平方

$newarr3 = arraymap('getpow',$arr);


function getpow($n){
    return $n*$n;
}
print_r($newarr3);
//JS写法
$newarr2 = arraymap(function($n){
    return $n*$n;
},$arr);
print_r($newarr2);




echo '<hr />';
function arraymap2($fn,$arr){

    $array1 = func_get_args();
    array_shift($rray);
    echo '<pre>';
    print_r($array1);
    echo '</pre>';
    foreach($array1 as $key=>$val){
        foreach($val as $k=>$v){
            $new[$key][$k]= $fn($v);
        }
    }
    return $new;
}



$arr1 = array('fsdl','fdsa','feds');
$arr2 = array(1,2,3,4,5);
$arr3 = array('one','two');

$new = arraymap2('strtoupper',$arr1,$arr2,$arr3);
echo '<pre>';
print_r($new);
echo '</pre>';