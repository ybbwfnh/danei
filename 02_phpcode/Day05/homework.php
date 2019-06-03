<?php
//打印倒三角

$n = 1;
for($h=9;$h>=$n;$h--){ //行
    for($l=1;$l<=$h;$l++){ //列
    
            echo "&nbsp;*";
    }
    echo "<br>";
}
echo "<hr>";
$n = 9;
for($i=1;$i<=$n;$i++){
    for($l=1;$l<=$i;$l++){
        
            echo "*&nbsp;";
        
    }
    echo "<br>";    
}
echo "<hr>";
$n=9;
for($h=1;$h<=$n;$h++){
    for($l=1;$l<=$n;$l++){
        if($l==1 || $l==$n || $l==$h){
            echo "*&nbsp;&nbsp;";
        }else{
            echo "~&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
echo "<hr>";
//打印一个E'
$n = 9;
for($i = 1;$i<=$n;$i++){
    for($j = 1;$j <=$n;$j++){
        if($i == 1 ||$j == 1 || $i ==$n || $i == ceil($n/2)){
            echo "*&nbsp;&nbsp;&nbsp;";
        }else{
            echo "~&nbsp;&nbsp;&nbsp";
        }
        
    }
    echo "<br>";
}
//计算1+2,1+2+3,1+2+3+4的值

for($k = 1;$k<=4;$k++){
    $sum = 0;
    for($i=1;$i<=$k;$i++){ 
        $sum += $i;
    }
    echo $sum."<br>";
}
echo "<hr>";
//输出一个带公式带计算
for($k = 1;$k<=4;$k++){
    $sum = 0;
    $link = '';
    for($i=1;$i<=$k;$i++){ 
        $sum += $i;
        $link .= $i."+";
    }
    $link = substr($link,0,-1);
    echo $link."=".$sum."<br>";
}