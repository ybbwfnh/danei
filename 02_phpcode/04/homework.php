<?php
$user = $_POST['user'];
$pwd = $_POST['pwd'];
$repwd = $_POST[repwd];
if ($user==""){
        die("用户名必须填写" );
    }elseif(strlen($user) <5 || strlen($user) >12){
            die( "用户名必须在5-12位之间");
    };
if($pwd==""){
    die("密码不能为空！");
}elseif(strlen($pwd)<6 || strlen($pwd)>12){
    die("密码必须6-12位");
}elseif($pwd !==$repwd){
    die("两次密码不一致！");
}


?>