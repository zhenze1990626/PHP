<?php
  header('Content-type: text/html; charset=UTF8'); // UTF8不行改成GBK试试，与你保存的格式匹配
  /*  for($i=0;$i<=10;$i++){
     echo "ihkjhj<br/>";
  } 
  echo "ghghj<br/>";
  echo '我就是我<br/>';
  $a=100;*/

  //php中双引号可以解析变量，可以解析转义字符,单引号只能解析单引号的转义字符和\的转义字符，其他都原样输出。

  //js中单双引号都不可以解析变量，都可以解析转义字符。
 /* $str="125no";
  $sry="a";
  $jkl=100;
  echo "$str"."$sry"."<br/>";
  echo "{$str}a";//用大括号就可以把变量分离出来
  var_dump((int)$str);//强制类型转换
  var_dump((float)$str);
  var_dump((double)$str);
  var_dump((real)$str);
  var_dump((string)$jkl);
  $a=25;
  $b=45;
  if($a==$b){
     echo 'a与b的值相等';
  }
     else{
     echo 'a与b的值不等<br/>';

     }
*/

/*  $x=3;
  switch($x){
    case 1:
    echo '$x=1';
    break;
    case 2:
    echo '$x=2';
    break;
    case 3:
    echo '$x=3<br/>';
    break;
    default:
    echo '$x=3';

  }*/
/*  for($i=1;$i<5;$i++){
    if($i==2){
       exit;
    }
    echo '$i<br/>';
  }*/


  /*function fun($a){
    $num=0;
    for($i=0;$i<$a;$i++){
      $num+=$i;

    }
    echo $num;

  }

  fun(80);//函数调用*/


 /* function fun($b,$a){
    $num=0;
    for($b;$b<=$a;$b++){
      $num+=$b;

    }
    return $num; //返回值

  }

 echo fun(3,7)+50;//函数调用

var_dump(function_exists(fun));//是否存在*/


 /* define("DHUCSAD",3)//定义常量
  echo DHUCSAD;*/
  //需要原型输出尽量使用单引号，单引号的效率比较高

 /* include('index3.php');//复制index3.php中的内容
  include_once('index3.php');//只引用一次*/
  /* function add($a,$b){
    return $a+$b;
}
  $x=add(3,7);

  echo "$x<br/>";

    function add2($a=5,$b=6){//php可以设置初始值,php唯一特性
    return $a+$b;
}
  $x1=add2();
  echo "$x1";*/

 /* function args(){

   $arrs=func_get_args();
   $x=count($arrs);
   for($i=0;$i<$x;$i++){
    echo "第{$i}个参数是:$arrs[$i]<br/>";

   }
  
  }
  $z="nihao";
  args('one',5,7.9,"two",$z);*/


/*  function filter($fun){//参数里面有函数，那么这个函数就叫做回调函数

  }
*/
/*function text($i){//作为参数初始化变量值
    $i++;
    echo "$i";

}
text(30);*/


/*function add($x,$y){

return $x+$y."<br/>";//return 10       // 带return值的函数可以echo

}

function add2($x,$y){

 $x+$y; //什么都不会调用

}

function add3($x,$y){

echo $x+$y;  //输出10

}


echo add(3,7);
add2(3,7);
add3(3,7);
*/

/*function text($a){
  $sum=0;
  for($i=0;$i<=$a;$i++){
    $sum+=$i;
  }
  return $sum;
}

echo "50累加的结果是".text(50)."<br/>";
echo "100累加的结果是".text(100)."<br/>";
*/

/*function_exists() //判断函数是否存在*/


//递归自调用

/*function text($n){
  echo $n."^^^^^^^^^^^^<br/>";
  if($n>0){
  text($n-1);
  }
  echo $n."^^^^^^^^^^^^<br/>";

}

text(5);//递归自调用

function text2($n){
 echo $n."……………………<br/>";
 if($n>0){
  text2($n-1);
 }
 echo $n."……………………<br/>";
}

text2(10);//递归自调用2*/

/*$one=200;
$two=100;
function text3(){
  global $one, $two;//声明全局变量
  echo "运算结果是：".($one+$two)."<br/>";
}
text3();*/

/*$one=200;
$two=100;
/*$GLOBALS//超全局变量*/
/*function text4(){
  $GLOBALS['two'] = $GLOBALS['one'] + $GLOBALS['two'];//起到了全局变量的作用
}
text4();
echo $two;*/

/*静态变量自执行*/
/*function confirm(){
   static $amd=0;
   echo $amd."<br/>";
   $amd++;
}

confirm();
confirm();
confirm();*/

/*$arr=array(1,2,3,89,6,4,8,9,7,40);
print_r($arr);//打印数组
echo "<br/>";

sort($arr);//排序
print_r($arr);//打印排序后的数组*/



/*function one($a,$b){
  return $a+$b;
}

function two($a,$b){
  return $a*$a+$b*$b;
}

function three($a,$b){
  return $a*$a*$a+$b*$b*$b;
}

$result="three";//变量接收到哪个函数的值，就调用哪个函数
echo $result(3,3);*/

//call_user_func_array()//php内置的回调函数

?>