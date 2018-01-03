<?php 
  header('Content-type: text/html; charset=UTF8');
  /*
    sql优化方法
    mysql 慢查询日志
    
    show variables like 'slow_query_log'
    set global slow_query_log_file=''  慢查询日志的记录位置
    set global log_queries_not_using_indexes=on;
    set global log_query_time=1

    
  */


  /*
   数据库优化

   存储层：存储引擎，字段类型，范式设计
   设计层：索引，缓存，分区
   架构层：多个mysql服务器的设置  读写分离
   sql语句层：性能高，速度快的sql语句




  */



  ?>
