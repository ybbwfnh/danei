<?php
$email = "@163.com";
if(strpos($email,'@')===false){
    echo'邮箱不合法';
}else{
    echo'邮箱合法';
}
echo '<br />';
$score = 88;
if($score>=90 && $score<=100){
    echo '优秀';
}elseif($score>=80 && $score<90){
    echo '良好';

};


$week = 12;
//switch 实现
echo '<br />';
switch($week){
    case 0:
        echo '星期日';
        break;
    case 1:
        echo '星期一';
        break;
    case 2:
        echo '星期二';
        break;
    case 3:
        echo '星期三';
        break;
    case 4: 
        echo '星期四';
        break;
    case 5:
        echo '星期五';
        break;
    case 6:
        echo '星期六';
        break;
    default:
        echo '超出范围';
        break;







}

?>