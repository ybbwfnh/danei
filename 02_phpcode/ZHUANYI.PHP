<?php
//10. 转译字符
 // 默认：
  $var ='
      <ul>
        <li>one</li>
        <li>two</li>
        <li>three</li>

      </ul>
  ';
  echo $var;

  echo '<hr />';

  //1.HereDoc
  $abc = '大马猴';

  $link = <<<HL
  	<ul>
        <li>one</li>
        <li>two</li>
        <li>three</li>
        <li>$abc</li>

      </ul>
HL;

 echo $link;

//  2.NowDoc

//不会被解析


echo "获取其中一个字母<br>";

$var = abefdsad;
echo $var."<br>";
echo $var[4];

echo "<hr />实例化对象。";

$obj = new stdClass();
var_dump($obj);

$res = fopen('../note.html','r');
var_dump($res);


echo "声明变量赋予初始值用的，";
$nu = NULL;
var_dump($nu);

echo '<br/>';
echo 12.7 + true + false +'';
?>
