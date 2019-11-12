<?php
//同upload案例,只不过使用了函数调用来完成.

//练习一个简单的单文件上传原理
//1.判断文件上传没有错误
//2.避免重名,重命名文件

if($_FILES['pic']['error'] == 0 ){
    //3.获得文件名称
    $filename = $_FILES['pic']['name'];
    //4.获得文件扩展名,把filename带入函数中处理后返回来
    $ext = getExt($filename);
 echo $ext;
    //5.重命名文件
    $filename = uuid().'.'.$ext;
    //6.先手动创建一个文件夹,再移动文件到这里
    move_uploaded_file($_FILES['pic']['tmp_name'],'upload/'.$filename);
}
echo '<hr />';
/** 获得文件的扩展名
 * @param $fn
 * @return false|string
 */
function getExt($fn){
    return substr($fn,strrpos($fn,'.')+1);
}

/** 获得唯一标识
 * @return string
 */
function uuid(){
    return md5(microtime(true).mt_rand(0000,9999));
}
