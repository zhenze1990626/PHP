<?php 
  header('Content-type: text/html; charset=UTF8');

  //echo "我是字符串输出函数"."<br/>";
  //print "我和echo 一样"."<br/>";
  //die("我后面的东西都不会输出");
  //exit("我后面的东西也不会输出");


  //特殊字符处理
  $s1="  hjghg  ";
  echo strlen($s1);  //输出字符串长度
  echo "<br/>";
  echo strlen(ltrim($s1));//输出清除左空格后的长度
  echo "<br/>";
  echo strlen(rtrim($s1));//输出清除右空格后的长度
  echo "<br/>";
  echo strlen(trim($s1))."<br/>";//输出清除左右空格后的长度

  $s2="12232jjhkj5469";
  echo (trim($s2,"0..9 j"))."<br/>";//去掉0-9 还有j的字符串两边的数字
  echo "<br/>";

  //字符串填充
  $s3="jhh";
  $s4=str_pad($s3,15,"yiuyi");//总共15个字符
  $s7="jhh gjgg ghgjhgj ghjgjh";
  echo $s4."<br/>";
  //全部转换为大写字母
  $s5=strtoupper($s3);
  echo $s5."<br/>";
  //全部转换为小写字母
  $s6=strtolower($s3);
  echo $s6."<br/>";
  //首字母大写
  echo ucfirst($s3)."<br/>";
  //每个单词首字母全部转为大写
  echo ucwords($s7)."<br/>";

  //html相关标签处理
  $sb="<h1>hello 你好</h1>";
  $sd="<h2>舅舅家快捷键</h2>";
  echo $sb."<br/>";
  echo $sd."<br/>";
  //将空格转化成隔行
  $hi="ghgg     
  ghgjgjg    gjg     
  jhgj    gjhgjh    ghj    
  gjgjh";
  echo nl2br($hi);
  /*//将特殊字符转化为实体
  htmlspecialchars();*/

  //将html标签去掉
  $d1="<a><h1>百<div>度</div></h1></a>";
  echo strip_tags($d1)."<br/>";

  //颠倒字符串
 $d2="12289890808098";
 echo strrev($d2)."<br/>";

 //获取字符串的长度
 echo strlen($d2)."<br/>";
 
 $d3="12289000";
 //通过千分位来格式化数字
 echo number_format($d3,"3")."<br/>";

 //函数加密
 echo md5($d3)."<br/>";

  ?>

