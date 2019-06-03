<?php
  $i=1;
  for(;$i <=5;$i++){
      echo $i."<br/>";
  }
echo "<hr/>";
  $i=1;
  for(;;$i++){
      if($i>5){
          break;
      }
      echo $i."<br />";
  }
  echo "<hr/>";
  $i = 1;
  for(;;){
      if($i>5){
          break;
      }
      echo $i."<br/>";
      $i++;
  }



?>