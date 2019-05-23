<?php
//实现随机获取5为字符验证码

$link = '';
$str = "1234567890qwertyuiopasdfghjklzxcvbnm";
for($i=1;$i<=5;$i++){
    $rand =  substr($str,mt_rand(0,strlen($str)-1),1);
   $link .= $rand;
}
echo $link;
echo "<hr />";
//加深测试,保证5个字符不会重复.
//  缺点会少位数,因为重复的字符串不被拼接.所以要采用不定次数循环来解决.如下案例
$link = '';
$str = '1234567890qwertyuiopasdfghjklzxcvbnm';
for($i = 1;$i <=5 ; $i++){
    $rand = substr($str,mt_rand(0,strlen($str)-1),1);
    if(strpos($link,$rand)===false){
        $link .= $rand;
    }
    
}
 echo $link."<br />";

 //不定次数解决验证码少位数
 // 思路,获得任意一个随机字符. substr 字符串截取
 //      获得一个随机数字 mt_rand(0,strlen($str)-1)
 $str = '1234567890qwertyuiopasdfghjklmnbvcxz';
 $link = '';
 while(strlen($link)<5){
     $rand = substr($str,mt_rand(0,strlen($str)-1),1);
     if(strpos($link,$rand)===false){
        $link .= $rand;
     }
 }
 echo $link;
