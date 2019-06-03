<?php
$n = 9;
for($i =1; $i<=$n;$i++){
    for($j=1;$j<=$i;$j++){
        echo $j.'*'.$i.'='.$j*$i."&nbsp;";
    }
        echo "<br>";
}

echo "<hr>";

$smart2 = 9;
for($h=1;$h <=$smart2;$h++){
    for($s=1;$s<=$h;$s++){
        echo $s."*".$h."=".$h*$s."&nbsp;";
    }
    echo "<br>";
}
echo "<hr>";
echo "输出一个字母N<br>";
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
