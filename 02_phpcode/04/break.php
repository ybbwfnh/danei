<?php
/*
输出1-10的偶数
利用continue
*/
for($i=1;$i<=10;$i++){
    if($i%2!=0){
        continue;
    }
        echo $i."<br />";
}
