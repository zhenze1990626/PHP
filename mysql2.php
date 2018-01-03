<?php 
 //数据库连接 mysql_connect
 //数据库选择 mysql_select_db
//关闭数据库  mysql_close($con)
//mysql_error() 数据库出错函数
//sql语句查询 mysql_query 参数是sql语句字符串 返回的是结果集
  /*mysql_fetch_row()  结果以索引数组形式返回
  mysql_fetch_array()  结果以索引数组+关联数组形式形式返回
  mysql_fetch_assoc()  结果以关联数组形式形式返回
  mysql_fetch_object()* 结果以对象形式返回
  mysql_num_rows() 输出的结果是一个数字 行数
  mysql_affected_rows() 受影响的行数
  mysql_field_name() 结果集 返回该列的结果名称
  mysql_num_field()  结果集 返回结果的所有列数  都需要用到 mysql_query函数进行处理才行

  mysql_num_rows()  返回结果的所有行数
  mysql_free_result() 释放结果集
  mysql_close()  释放连接资源
  mysql_errno() 如果返回假时 获取错误号
  mysql_insert_id() 获取最后一次插入的id号

  数据库持久连接 mysql_pconnect  脚本结束不会断开连接 使用mysql_close也不会断开连接  效率高 但是占资源
  */  


  header('Content-type: text/html; charset=UTF8');
  if($con=mysql_connect('localhost','root','dsh198')){

  	echo "数据库连接成功"."<br/>";
  }
  else{


  	echo "数据库连接失败"."<br/>";
  }
  if(mysql_select_db('m1')){

    echo "数据库使用成功"."<br/>";
  }else{

    echo "数据库使用失败"."<br/>";

  }
  mysql_query('set names utf8');
  if(mysql_query('INSERT photo VALUES(NULL,"董诗海","dsh1989626",28,1)')){

    echo "插入成功"."<br/>";
  }
  else{

    echo "插入失败"."<br/>";
  }
  //发指令，取数据
  $query=mysql_query('select * from photo');
  // echo mysql_num_rows($query); //输出行数

  //echo mysql_result($query,4,'username');//输出任意结果
  if(mysql_query('update photo SET username="halou" where id=2')){
     echo "修改成功，修改的个数为：";
     echo mysql_affected_rows($con);//只能够获取前一条影响的记录
  }
  else{

    echo "修改失败";
  }



  ?>