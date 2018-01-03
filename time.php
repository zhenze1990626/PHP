<?php 
  header('Content-type: text/html; charset=UTF8');
  /*
     //UNIX 时间戳
     从公元1970年一月一日到现在的秒数
  */
 //echo time();
 echo "<pre>";
 print_r(getdate());
 echo "</pre>"."<br/>";
 //时间戳转日期
 echo date("Y-m-d H:i:s",1515154000)."<br/>";
 //日期转时间戳
 echo mktime(2,19,45,7,1,2015)."<br/>";
 //microtime() 返回时间戳微秒数
 var_dump(microtime(true))."<br/>";
 //英文文本的日期时间直接解析为时间戳
 //strtotime()

microtime()//返回当前时间戳和微秒数

//日历实例




  ?>