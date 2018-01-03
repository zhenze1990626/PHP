<?php
  header('Content-type: text/html; charset=UTF8');

  //域名 Domain
  //以点分割，以字符作为中间部分，每段长度是1-63个字符

  //DNS   ping
  //Domain name system  域名服务器
  //作用：将域名和ip地址进行双向解析

  //端口 PORT  netstat -ano
  /*主要用于区分服务
  如web服务器的端口是  80  
  ftp 端口 21  
  email 端口  25 
  mysql 端口 3306*/

  //特殊文件和特殊ip地址  hosts 本地解析域名
  //c:windows:system32:drivers:etc:hosts

  //屏蔽垃圾网站的方法，在hosts文件中把垃圾网站的域名指向127.0.0.1
  

  //linux(开源，稳定)
  //web 服务器:Apache   iis  微软（.net） nginx (俄罗斯)（并发能力超强）
  //LAMP LNMP
  //数据库 mySQL     Qracle    SQL server (微软)


 //Apache 
  //bin 文件夹 httpd.exe 用来启动停止Apache 服务
  //conf 配置文件目录
  //htdocs 网站根目录



  // ServerRoot "F:/wamp/bin/apache/apache2.4.9"  Apache 服务器根目录
  //listen 80 监听80 端口
  //servername localhost:80 服务器名称
  //documentroot 文档根目录 http访问时的目录
  //directory 该目录的权限
  //1024以下的端口号一般是系统所使用

  echo("哈哈哈哈我就是我哈哈哈哈");

  ?>

  