<?php
$arr2 = array();//初始化

$arr2[] = array('name'=>'张三','age'=>12,'add'=>'北京');
$arr2[] = array('name'=>'李四','age'=>13,'add'=>'天津');
$arr2[] = array('name'=>'王五','age'=>15,'add'=>'上海');
?>
<!DOCTYPE html>
<html>
<body>
    
<table>
    <tr>
        <th>姓名</th>
        <th>年龄</th>
        <th>地址</th>
    </tr>
    <?php foreach($arr2 as $val){ ?>
        <tr>
            <td><?php echo $val['name'];?></td>
            <td><?php echo $val['age'];?></td>
            <td><?php echo $val['add'];?></td>
        </tr>
   <?php } ?>
</table>

</body>
</html>
