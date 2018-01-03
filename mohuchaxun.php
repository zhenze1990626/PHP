<?php 
 header('Content-type: text/html; charset=UTF8');

  /*

  php 模糊查询技术


  mysql 查询 
  精确查询：有且仅有一条sql查询   用户注册 登陆
  模糊查询：返回结果不确定    站点搜索   两种查询返回的结果都可能为空

  语法：
  1.sql 匹配模式中不能使用=或者!=  必须使用like 或者not like
  2.% 表示任意数量的任意字符
  — 表示任意的单个字符
  3.必须使用两种模式中的一种
  4.默认模式下sql不区分大小写

  正则表达式匹配模式
  . 表示匹配任意单个字符
  * 0个或多个在他前面的字符
  ^ 表示以某个字符或者字符串开头
  $ 表示以某个字符或者字符串结尾   匹配 RLIKE 或者NOT RLIKE 

  */

    $conn = @mysql_connect("localhost", "root", "dsh1990626") or die("数据库链接错误");  
    mysql_select_db("photo", $conn);  
    mysql_query("set names 'GBK'"); //使用GBK中文编码;  
      
    if($_GET['key']) {  
          
        $sql = "SELECT * FROM `text` WHERE content LIKE '%$_GET[key]%'";  
        $query = mysql_query($sql);  
          
        while($r=mysql_fetch_array($query)) {  
            echo "$r[content]"."<br>";  
        }  
    }  
      

 


?>