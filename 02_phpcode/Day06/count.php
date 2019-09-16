<?php
//        count/sizeof 获得数组或对象的个数
$arr = array(
    'a',
    "b",
    "c",
    "d",
);
echo count($arr)."<br>";
echo sizeof($arr); //都是获取数组或对象的个数
echo '<hr>';

// join/implode: 将一纬数组转换成字符串
$arr = array(
    'a',
    "b",
    "c",
    "d",
);
//手册格式 implode ( string $glue , array $pieces ) : string
echo implode('!',$arr)."<br>"; //a!b!c!d
echo join('@',$arr); //a@b@c@d
echo "<hr>";
// 案例
$arr = array(
    'name'=>'Wayne',
    'age'=>'29',
    'sex'=> '男'
);
//要求,打印出如下格式,name=Wayne,age=29,sex=男
foreach($arr as $k=>$v){
        $newarr[] = $k."=".$v;
        
};
echo "<pre>";
print_r( $newarr);
echo "</pre>";
echo '<br>'.implode(',',$newarr); //name=Wayne,age=29,sex=男

$a = 1;
$b = 2;
$c = 3;
if (1 || 1 && $c=7){
    $a++;
    $b++;
    $c++;
}
echo $a,$b,$c."<br />";

//练习题

$arr2 = array(
    'one' => 'a',
    'two' => 'b',
    'three' => 'c',
);
echo "转为新数组";
//  $newarr = array(
//      'a'=>'one',
//      'b'=>'two',
//      'c' => 'three',
// );
echo '<br/>';
foreach($arr2 as $k=>$v){
    $arrto[$v] = $k;
}
echo "<pre>";
print_r($arr2);
echo "</pre>";
echo "<pre>";
print_r($arrto);
echo "</pre>";


// 把两个数组合并成一个数组, $arr4作为键,$arr3作为值.
$arr3 = array(
    'tom',
    '18',
    '男'
);
$arr4=array(
    'name',
    'age',
    'sex'
);
$arr = array();
foreach($arr4 as $k => $v){
        $arrr[$v] =$arr3[$k];
}
print_r($arrr);