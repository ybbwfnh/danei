<?php

/**
 * 完成3,2,1 的倒序输出
 * 2中方法,最终使用递归
 * 
 * 如果 ECHO,拿到最后面,就会反向输出1,2,3.因为,递归怎么进去的就要怎么出来,一层一层出来的时候
 * 本层的变量还在,称之为局部变量.并输出了.
 *  */

 //方法一
 for($i=3 ;$i>0;$i--){
     echo $i."<br />";
 }
 //方法二.递归函数

 function digui($n){
    echo $n.'<br/>';  //3,2,1
    $n--;
    if($n>0){
        digui($n);  //递归,自己调用自己,输出,--,和判断3大要素
    }
 }
 digui('3');
echo "<hr />";
 // 反向,修改ECHO位置


function digui2($n){
   
   $n--;
   echo $n.'<br/>';  //2,1,0
   if($n>0){
       digui2($n);  //递归,自己调用自己,输出,--,和判断3大要素  
   }
   
}
digui2('3');
echo "<hr />";
function digui3($n){
    $n--;
    if($n>0){
        echo $n.'<br/>';  //2,1
        digui3($n);  //递归,自己调用自己,输出,--,和判断3大要素  
       
    }
    
 }
 digui3('3');

 echo "<hr />";
function digui4($n){
    $n--;
    if($n>0){
        
        digui4($n);  //递归,自己调用自己,输出,--,和判断3大要素  
        echo $n.'<br/>';  //1,2,
    }
    
 }
 digui4('3');


 echo "<hr />";
function digui5($n){
    $n--;
    if($n>0){   
        digui5($n);  //递归,自己调用自己,输出,--,和判断3大要素  
    }
    echo $n.'<br/>';  //0,1,2,
 }
 digui5('3');

 echo "<hr />";
 function digui6($n){
     $n--;
     if($n>0){   
         digui6($n);  //递归,自己调用自己,输出,--,和判断3大要素  
     }
     echo $n.'<br/>';  //1,2,
  }
 
  digui6('3');

  echo '<hr />';
  /**
   * 计算函数累成
   * 
   * 
   */

function istest($n){
    if($n >1){
    return $n * istest($n-1);
    }
    return 1; //一层一层累成,如果不写外面这个,就错了, 写了就是等于递归结束函数没结束,开始一层一层的成.才有结果
}

echo istest(5);