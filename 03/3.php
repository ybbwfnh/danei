<?php
// b.链接第一个表达式，与第二个表达式都为真，才为真，否则就为假。
     
  var_dump(
      true && false, //false
      false && false,//false
      false && false //true
  );
     
  //条件，不是1-10的数字。
  $var = 9;
  if($var<1 || $var>10){
    echo "不是1-10的数字";
  }else{
    echo "是1-10的数字";
  };
  /*
  判断$week 如果是 1 3 5 ，我吃包子
  否则我吃饺子
  
  */
  $week = 1;
  if($week ==1 || $week == 3 || $week== 5){
    echo "包子";
  }else{
      echo "吃饺子";
    }
  echo "<hr />,测试关于与或非的短路问题和，数字为if判断时的真假转换问题";

  $aa = 1;
  $bb = 2;
  if($aa && $bb++){
    $aa++;
    $bb++;
  }
  echo $aa."<br/>".$bb;

  $aa = 0;
  $bb = 2;
  if($aa && $bb++){
    $aa++;
    $bb++;
  }
  echo $aa."<br/>".$bb;
  echo "<br>因为$aa &&$bb 短路，所以不执行if语句。0=false,非零=true";
  //为啥$aa || $bb++, 短路，¥bb还被执行。
  $aa = 1;
  $bb = 2;
  if($aa || $bb++){
    $aa++;
    $bb++;
  }
  echo "<br>";
  echo $aa."<br />".$bb;