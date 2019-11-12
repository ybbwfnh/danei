<?php
echo '<pre>';
print_r($_FILES);
echo '</pre>';

echo '<br />';

echo $_FILES['pic']['name'];

echo '<hr/>';


//练习一个简单的单文件上传原理
//1.判断文件上传没有错误
//2.避免重名,重命名文件
if($_FILES['pic']['error'] == 0 ){
    //3.获得文件名称
    $filename = $_FILES['pic']['name'];
    //4.获得文件扩展名
    $ext = substr($filename,strrpos($filename,'.')+1);
 echo $ext;
    //5.重命名文件
    $filename = md5(microtime(true).mt_rand(0000,9999)).'.'.$ext;
    //6.先手动创建一个文件夹,再移动文件到这里
    move_uploaded_file($_FILES['pic']['tmp_name'],'upload/'.$filename);
}
echo '<hr />';
