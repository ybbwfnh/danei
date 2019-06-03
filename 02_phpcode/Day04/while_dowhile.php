<?php
// a。for,while，先判断条件再循环。
// b.do  ...while。 当第一个判断条件为假，do...while比 while多执行1次。

//案例1为假时
// while
$i =1;
while($i<1){
    echo "hello";
    $i++;
}

echo "<hr>";
//do  while
$i = 1;
do{
    echo "good";
    $i++;
}while($i<1);
echo "<hr/>";
// 为真时，执行结果相同

/*
联系 for循环的精确循环次数
习题，输出0-9之间的任意数，4遍。
*/
$link = '';

for($i=1;$i <=4;$i++){
    $rand = mt_rand(0,9);
    $link .= $rand;
}
echo $link;
echo "<br />";
/*
练习 不定次循环，得到 4个一样的数字，例如8
*/
$link = '';
while(strlen($link)<4){
    $rand = mt_rand(0,9);
    if($rand==8){
        $link .= $rand;
    }

}
echo $link;