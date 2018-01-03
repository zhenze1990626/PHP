<?php
  header('Content-type: text/html; charset=UTF8');
 /*  $arr=array("hahha","我就是我","jhj");
   foreach ($arr as $key => $value) {
  	echo '<br>第'.$key.'值是：'.$value;//foreach 循环
  }*/

//str_replace 函数的替换
 //unction_exist 函数是否存在
  //method_exists 类是否存在


/* 
 可变变量
 $a="abc";
  $abc=10;
  echo $$a;*/


/*foreach ($person as $value) {//第一种方式
	print_r($value)."<br/>";
}
  
foreach ($person as $key => $value) {//第二种方式
	echo $key;
	print_r($value)."<br/>";
}*/



/*each //函数返回的是索引与关联混合的数组。*/

/*reset($p);//把数组指针指向元素头
end($p);//把数组指针指向元素尾
next($p);//把当前指针下移一位
prev($p);//把当前指针上移一位
current($p);//获得当前指针所在的元素值
key($p);//得当前指针所在的元素键名*/



//超全局变量都是数组
/*$_GET //以get方式提交的所有数据的集合
$_POST  //以post方式提交的所有数据的集合*/

//const const 常量名=值;//必须写成顶层代码，不是顶层代码会报错
//define("常量名","值");//定义常量

//使用常量
/*constant("常量名");//第一种形式
直接常量名//第二种形式*/

//判断常量是否存在
//defined("常量名");

//魔术常量
//当前文件所在目录  _DIR_
//当前网页文件  _FILE_
//当前是第几行  _LINE_
  ?>