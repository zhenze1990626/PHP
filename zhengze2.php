<?php 
  header('Content-type: text/html; charset=UTF8');
  
  //与perl 兼容的正则表达式处理函数

  /*preg_match() //进行正则表达式匹配

  preg_match_all(pattern, subject, matches)()
  //进行正则表达式全局匹配

  preg_replace()//搜索和替换

  //第一个参数是一个正则(也可以是一个正则数组，如果是数组，第二个参数也必须是相同个数的替换数组)，第二个参数是要替换的内容
  //（a.普通字符 b.使用子模式  c.如果正则加e模式修正符还可以使用函数处理 d.数组对应的元素），第三个参数就是你要操作的字符串本身，第四个参数是可选的，
  //限制替换次数，默认替换所有。

  preg_split()//分割字符串

  preg_grep()//返回与模式匹配的数组单元

  preg_replace_callback(pattern, callback, subject)()
  //用回调函数执行正则表达式的搜索和替换*/

  //定界符   '//'

  //preg_grep()

  //匹配数组中的元素，返回正则表达式匹配的数组单元

  $array=array("hjh","kjkj","kh","kjk","kjk");
  $jkl=preg_grep("/^[a-zA-Z]+(\d|\.)+$/",$array);
  print_r($jkl);
  echo "<br/>";

  //strstr 搜索一个字符串在另一个字符串中第一次出现，该函数返回字符串的其余部分
  echo strstr("this is a text","text")."<br/>";

  //strpos 返回字符串在另一个字符串中第一次出现的位置，如果找不到则返回false

  //字符串的替换

//str_replace()//三个必选参数 第一个参数是目标对象 ，第二个参数是替换对象，第三个参数是被处理的字符串
$val=array("o","e","a","b");
echo str_ireplace($val,"","hello world of php")."<br/>";//不区分php

$s=array("http","www","jsp","com");
$r=array("ftp","bbs","php","net");
$u="http://www.jspbrother.com/index.jsp";
echo str_replace($s,$r,$u)."<br/>";

//字符串分割函数 preg_split
//函数 explode()
$la="hjh jkhh jkhjh2 jhjh3";
$lb=explode(" ",$la);
echo $lb[2]."<br/>";
echo $lb[3]."<br/>";

//implode()  把数组中的所有元素组合成一个字符串
$f=array("ff","bnn","sas","etety");
echo implode("+",$f)."<br/>";
echo join("+++++",$f)."<br/>";



  ?>