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










?>