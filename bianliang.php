<?php
  header('Content-type: text/html; charset=UTF8'); // UTF8不行改成GBK试试，与你保存的格式匹配
  /*global //定义全局变量
  unset()//手动删除变量
  //通过参数列表传递给函数的变量，对于函数来说是局部变量，除非在传递时带有&符号

  //require,include包含不会影响作用域
  include("index2.php");
  require("index2.php");
  include("index2.txt");//txt文件照样会输出

  //静态变量 static
  function text(){
   static $a=0;  //0,1,2,3,4,5,6,7,8,9……
   echo $a;
   a++;//静态变量只有第一次时会初始化，以后均不会初始化
  }*/


 /* //参数两种传参方式
  function text($arg1){//常规参数传参
   $arg1=200;
  }
  $var1=100;
  text($var1);
  echo $var1."<br/>";

  function text2(&$arg2){//引用参数“&”传参，$arg2是引用参数，外部变量$var也被修改
   $arg2=200;
  }
  $var2=100;
  text2($var2);
  echo $var2;*/
  
  function person($name="张三",$age="20",$sex="男"){
    echo "我的名字是:{$name},我的年龄是:{$age},我的性别是:{$sex}<br/>";

  }//注意php中必须书写分号;

  person();//不传参数输出是默认值
  person("我就是我");//输入参数将会覆盖默认值

  //回调函数
  //如果一个函数的参数是函数，这个函数就是回调函数

  include_once();require_once();//只引入一次
 ?>