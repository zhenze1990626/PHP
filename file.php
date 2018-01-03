<?php
  header('Content-type: text/html; charset=UTF8');

 /* 
  fopen() 打开文件

  filetype() 输出文件类型
  is_dir()  判断是否是目录
  is_file() 判断是否是文件
  is_link()//linux 系统下的
  is_uploaded_file() 判断是否是http post上传的文件
  返回的均为true 或者false

  var_dump(file_exists("text"));

  file_exists()文件是否存在
  file_size() 获取文件大小
  is_readable() 文件是否可读
  is_writeable() 文件是否可写
  filectime() 文件创建时间
  filemtime()  文件修改时间
  fileatime() 文件访问时间
  is_executable()  判断文件是否可执行
  */
  

  /*
   php中的数学函数

   abs()取绝对值
   ceil() 进一取整
   floor() 舍去法取整
   min() 最小值
   max() 最大值
   mt_rand()  生成更好的随机数
   pi() 的到圆周率的值 相当于常量M_PI()
   pow(2,5) 2的5次方
   rand() 产生一个随机整数
   round(5.23564) 以两位小数四舍五入 第二个参数默认是0
   sqrt 开平方根

  */

  /*
  文件路径相关函数

  相对路径

  ./tmp tmp/ 一样 这里的意思是相对目录 当前目录下的tmp 目录
  ../tmp tmp的上级目录
  ../../../ 上上上级目录 一个../ 代表一个目录

  目录分隔符 
  windows 下面 "\"
  linux unix "/"
  php 里面是 "/"
  php 下面有个目录分割常量  DIRECTORY_SEPARATOR
  在不同系统下有不同分隔符 但是"/"在php中是通用的

  绝对路径

  / 根目录
  如果程序在服务器端执行的，那么根目录就是系统根目录 php

  如果程序是在服务器端执行完毕传回客户端才执行的代码中的根目录，是网站根目录
  js 

  basename() //返回文件名
  dirname()  //返回路径名
  pathinfo() //返回路径数组
     */


  
  $url1="http://www.baidu.com/1.php";
  $url2="F:/wamp/www/haha/2.php";
  echo basename("$url1")."<br/>";//输出文件名
  echo basename("$url2")."<br/>";
  echo dirname("$url1")."<br/>";//输出路径名
  echo dirname("$url2")."<br/>";
  echo "<pre>";
  print_r(pathinfo($url1));//返回路径数组
  echo "</pre>";


  /*
  跟文件操作相关的函数

  touch():新建文件
  unlink() 删除文件
  rename() 重命名文件
  copy() 复制文件

  */
  touch("4.php");
  //unlink("4.php");
  rename("4.php","5.php");
  copy("5.php","../5.php");

 /*
  linux 下有修改文件权限的php 函数
  chgrp() 更改所属组
  chomod() 更改权限
  chown() 更改所有人
  filegroup() 查看文件所属组
  fileowner() 查看文件所有人

 */
/*
  文件内容操作相关函数
  操作文件整体

  读：file_get_contents() 把文件作为整体字符串返回
  file()  把文件中的每一行作为元素返回一个包含每一行的数组
  readfile()  直接读取文件并输出

  写：file_put_contents() 

  服务器里面的文件是本地文件
  远程文件：http://wwww.baidu.com
  本地文件与远程文件均可以读，但是远程文件不能写
*/

  /*$ft=file_get_contents("shuzu4.php");
  var_dump($ft."<br/>");*/

  /*$ft=file_get_contents("http://wwww.baidu.com");
  echo $ft;*/

  /*
   资源形式操作文件

   fopen(文件名，模式) 以资源的形式打开文件

   模式：没有文件的话写会创建文件而读不会创建，因此要打开一个只读文件的时候需要首先判断文件是否存在然后方可打开否则会出错

       r  只读模式打开文件 只能用读资源的函数

       r+ 只读只写的模式打开  读写函数都可用

       w  只写模式打开文件  只能用写函数
       如果文件不存在则创建文件并写入，如果文件存在则覆盖原内容写入新内容
       重要文件慎用

       w+ 只读只写的模式打开

       a  只写模式打开文件
       如果文件不存在则创建文件并写入，如果文件存在则追加新内容到原内容后

       a+ 只写只读的模式追加

       b 二进制方式打开(linux 中可以省略) 和上面的模式联合使用 rb

       t 以文本方式打开(默认)

       fwrite() 向资源中写入内容 第三个参数限制写入字符 是可选的参数
       fread()  从资源中读内容 第一个参数是资源名，第二个参数是读取内容的长度
       fgetc()  从资源中每次读一个字符 只有一个参数就是资源名，并且指针随读取移动
       fgets()  从资源中每次读取一行字符 如果第二个参数指定读取的字节长度，长度为参数—1个字节数 并且指针也会随指针移动

       feof()  判断读取文件的指针是否到尾或着是否出错，如果到末尾或者出错返回的真

  */

      
      $res=fopen("./t.txt","w");
      echo $i=fwrite($res,"wertighjgjhghjghjghj\r\nghjgjhgxzhghjghjghjghjg\r\n");//限制写几个字符，前面的内容将会被覆盖
      echo "<br/>";
      $res=fopen("./t.txt","r");
      echo fread($res,3)."<br/>";
      echo fgets($res)."<br/>";
      echo fgetc($res)."<br/>";


      /*
      文件指针函数
      ftell() 当前指针位置
      fseek() 移动指针
      fread() 移动指针并返回读取到的内容
      rewind() 指针复位
      fclose() 关闭资源 建议打开的资源在不使用时立即关闭
      */

  ?>