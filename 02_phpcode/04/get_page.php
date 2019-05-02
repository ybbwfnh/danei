
<?php
// 接收分页数字，且用三元运算判断值是否存在，存在正常接受，不存在赋值第一页
$curpage= isset($_GET["page"])?$_GET["page"]:1;

echo $curpage;
?>






<!DOCTYPE html>
<meta http-equiv="X-UA-Compatible" content="text/html"; charset="utf-8">
<!-- 提交分页 -->
<a href="get_page.php?page=1">第一页</a>
<a href="get_page.php?page=2">第二页</a>
<a href="get_page.php?page=3">第三页</a>

</html>