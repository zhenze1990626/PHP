<?php 
  header('Content-type: text/html; charset=UTF8');

  /*
   php 分步环境搭建

   1.apache 注意域名 tina.com 域名加上com  主机名www.tina.com   注册邮箱
   2373415330@qq.com  典型安装
   
   2.mysql 安装  自定义安装 custom 

   mysql 详细配置  utf8

   mysql -u root -p 命令


  3.php配置

  php 支持apache  首先修改配置文件apache 中的 conf 文件夹中的httpd 文件
  加入以下部分   

  LoadModule php5_module D:/wamp/php5/php5apache2_2.dll

   AddType application/x-httpd-php .php .phtml
   
   phpIniDir D:/wamp/php5

   php.ini-recommended 改为 php.ini文件

   php ini 开发阶段需要开启 display_errors=on  运营阶段需要关闭  display_errors=off



   php 操作mysql 

   需要在php 中找到 libmysql.dll  复制到c:windows 文件夹下

   php ini 中打开几个扩展模块

   extension=php_mysql.dll
   extension=php_mysqli.dll
   extension=php_pdo.dll

   打开 前面分号去掉

   然后再加上  

   extension_dir="D:/wamp/php5/ext"



  apache 中的 conf 文件夹中的httpd 文件

  DirectoryIndex index.php index.html  改成先解析php文件再解析html文件


  环境安装比较好的是linux  集成环境appserver wampserver
  
  appserver2.5.10 比较适合二次开发
  http://www.appservnetwork.com/index.php?newlang=chinse


  Dos 命令
  net start /stop 

  phpmyAdmin 修改 config.inc.php
  
  */
   
 phpinfo();//用来测试有没有支持mysql 模块 说明连接成功



/*清除Apache日志文件(重要)

重复访问你有可能就是恶意攻击你 access.log

install.log 安装日志

Apache下的apache_access.log和error.log文件一直没动，发现已经3G左右了。
windows下删除apache_access.log和error.log文件

1. 删除C:\wamp\logs目录下的apache_access.log和access.log文件
2. 打开Apache的httpd.conf配置文件并找到下面两条配置
[plain] view plain copy 在CODE上查看代码片派生到我的代码片
ErrorLog "c:/wamp/logs/apache_error.log"  
CustomLog "c:/wamp/logs/access.log" common  

修改为
[plain] view plain copy 在CODE上查看代码片派生到我的代码片
#ErrorLog "c:/wamp/logs/apache_error.log"  
[plain] view plain copy 在CODE上查看代码片派生到我的代码片
#限制错误日志文件为 1M  
ErrorLog "|bin/rotatelogs.exe -l c:/wamp/logs/apache_error-%Y-%m-%d.log 1M"  
[plain] view plain copy 在CODE上查看代码片派生到我的代码片
#每天生成一个错误日志文件  
ErrorLog "|bin/rotatelogs.exe -l c:/wamp/logs/apache_error-%Y-%m-%d.log 86400"  

[plain] view plain copy 在CODE上查看代码片派生到我的代码片
#CustomLog "c:/wamp/logs/access.log" common  
CustomLog "|bin/rotatelogs.exe -l c:/wamp/logs/access-%Y-%m-%d.log 1M" common  
CustomLog "|bin/rotatelogs.exe -l c:/wamp/logs/access-%Y-%m-%d.log 86400" common*/  

 /* conf/extra 辅配置文件   httpd-mpm  多路处理模块

    vhosts 虚拟主机文件     一个服务器多个网站  "\"可以续行
    
    
 */

    

/*
自定义网站根目录
apache  http.conf   
DocumentRoot "E:/wamp/cicle"
<Directory "E:/wamp/cicle">
*/

/*
多站点配置



*/





  ?>