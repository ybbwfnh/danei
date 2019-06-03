<?php
$str = '<span><h1>fdsafowek</h1></span>' ;
echo "默认字符串".">>>".strlen($str)."<br />";
$newstr = strip_tags($str);
echo strlen($newstr);
echo "<hr>";
echo "保留指定标签,源码中显示";
$newstr2 = strip_tags($str,'<h1>');
echo $newstr2;