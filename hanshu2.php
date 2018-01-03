<?php 
  header('Content-type: text/html; charset=UTF8');
  //不定参数函数的写法
  function getsum(){
    $arr=func_get_args();//获得所有实参结果是数组
    $sum=0;
    foreach ($arr as $value) {
    	$sum+=$value;
    }
    return $sum;

  }

  $he1=getsum(1,2,2,3);
  $he2=getsum(1,2,2,3,9,8,0);
  $he3=getsum(1,2,2,3,8,9,0);
  echo "$he1"."<br/>";
  echo "$he2"."<br/>";
  echo "$he3"."<br/>";


  //调用可变函数
  function f1(){

  echo "hhahahhha"."<br/>";

  };
  $str1="f1";
  $str1();

  //调用匿名函数方式1
  $str2=function(){
  echo "调用匿名函数2"."<br/>";//调用匿名函数跟调用可变函数一样
  };
  $str2();

  //调用匿名函数方式2
  $s1=function(){
   $a=func_get_args();
   $sum=0;
    foreach ($a as $value) {
    	$sum+=$value;
    }
    return $sum;

  };
  $s2=array(23,45,7,9,8,6,5);
  $s3=call_user_func_array($s1,$s2);
  echo "$s3<br/>";

  //局部不能使用全局，全局也不能使用局部

  /*function_exists()//某个函数是否被定义过 返回布尔值
  func_get_args(n)//获得一个函数的第n个实参值（从零开始）
  func_get_args()//获得一个函数的所有实参，结果是一个数组
  func_num_args()//获得一个函数的所有实参的个数
  通常用于参数不定的时候

  */

  ?>