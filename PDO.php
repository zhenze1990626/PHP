<?php

  /*
   PDO连接形式 php处理数据库的扩展库  php data object  php 数据对象

   php_pdo_mysql.dll  php 文件夹的ext目录
   php.ini
   extension=php_pdo_mysql 基于mysql 驱动的扩展库 phpinfo() 
  */

/*phpinfo();*/


 /*
2.通过uri形式连接数据库
  只是把第一个参数改成url

*/



 /*
3.通过配置文件来连接数据库
  php.ini 中修改即可
 */

/*
1.通过参数形式连接数据库

*/
  try
  {
  $pdo=@new PDO("mysql:host=localhost;dbname=photo","root","dsh1990626");
  header('Content-type: text/html; charset=UTF8');
  echo "连接成功<br/>";
  echo $pdo->getAttribute(PDO::ATTR_AUTOCOMMIT)."<br/>";//是否自动开启
  $pdo->setAttribute(PDO::ATTR_AUTOCOMMIT,0);//关闭自动开启
  echo $pdo->getAttribute(PDO::ATTR_AUTOCOMMIT)."<br/>";
  $sql="select * from text";
  $res=$pdo->prepare($sql);
  $res2= $res->execute();//预处理语句

  /*$res3=$res->fetch();//获取结果集中的一条语句*/
  // if($res)
  //  {
  //   while($row=$res->fetch())
  //    {
  //   	print_r($row);
  //   	echo "<hr/>";   //循环遍历所有结果集
  //    }
 
  //  } 
  // $amt=$res->fetchAll(PDO::FETCH_ASSOC); //返回关联数组
  /*$amt2=$res->fetchAll(PDO::FETCH_ASSOC)
  print_r($amt2);    */


 }catch(PDOException $e){
        echo $e->getMessage();
        exit;
         }



  /*
  PDO对象的方法  

  exec() 执行一条sql语句，并返回其受影响的行数  对于select查询语句并没有作用   如果没有受影响的条数，则返回结果为0

  lastinsertId() 最后插入记录的ID号

  query() 执行一条sql语句   返回一个PDO对象   执行查询语句 select 

  errorInfo()  返回错误信息

  prepare() 准备要执行的sql语句,返回pdo 对象  推荐使用

  execute() 执行一条sql 语句   执行预处理语句
   
  getAttribute() 得到数据库连接属性
  setAttribute() 设置数据库连接属性

  bindParam()  绑定一个参数到指定的变量名

  bindValue()  把一个值绑定到一个参数

  bindColumn()  绑定一列到一个php 变量

  columnCount() 返回结果集中的列数









  */
  ?>