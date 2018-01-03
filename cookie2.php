<?php 
  header('Content-type: text/html; charset=UTF8');
    foreach($_COOKIE["user"] as $key => $value)
  {
    //输出cookie数组中二维的键值对
    echo $key.":".$value."\n";

  }
 



  ?>