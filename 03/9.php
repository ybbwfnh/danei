<?php 

$n = 10;
if ($n >=1 && $n <=10){
    echo '上旬';
}elseif($n >= 11 && $n <=20){
    echo '中旬';
}elseif($n >=21 && $n <=31){
    echo '下旬';
}else{
    echo '超出范围';
}


?>