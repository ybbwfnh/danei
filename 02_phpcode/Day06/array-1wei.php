<?php
//  1.数组中第一个忽略键值的成员值.并且在她之前的成员值名称都为负值.那么从0开始.
echo "<pre>";
 $arr = array(
         '-20'=> fds,//-20
         '-1'=> 232,//-1
         's', //0
         'b'  //1
 );
 print_r($arr);
 echo "</pre>";
//  2.数组中第一个忽略键值的成员值.并且在她之前的成员值名称有正值,负值.那么从最大数+1;
echo "<pre>";
   $arr2 = array(
             '-20'=> fds, //-20
             '101'=> 232,//-1
             '-99' => hfjdsk,
             's', //102
             'b'  //103
   );
 print_r($arr2);
 echo "</pre><hr/>";

 echo "循环数组中的内容<br>";
 $arr = array('apple','banane','oringe','wortmant');
 $count = count($arr);
 for($i = 0; $i<$count; $i++){
     echo $arr[$i]."<br>";
 }
//关联数组循环
echo "关联数组循环<br>";
 $arr = array(
    '-20'=> fds,//-20
    '-1'=> 232,//-1
    's', //0
    'b'  //1
     );
foreach($arr as $key=>$value){
    echo $arr[$key]."<br>"; //也可以直接输出值,$value
    //echo $value."<br>";
}