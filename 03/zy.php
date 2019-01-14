<?php
$married = true;
echo $married ,"<br>";
$married = false;
echo $married;
echo "<hr />";
var_dump($married);

echo "<hr />类型转换之临时转换";
  $var = 12.5;
  var_dump($var);
    echo "<br />";
  var_dump((int)$var);
  echo "<br />";
  var_dump((bool)$var);
    echo "<br />";
  var_dump((array)$var);
    echo "<br />";
 $arrayName = array('0' => 1, );
   echo "<br />";
   var_dump($arrayName);
     echo "<br />";
  var_dump((int)$arrayName);
    echo "<br />";
    var_dump((bool)$arrayName);
      echo "<br />";
    var_dump((float)$arrayName);
        echo "<hr />永久转换，将浮点型转换未整型";
      settype($var,'int');
      echo $var;


 ?>
