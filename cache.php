<?php
  header('Content-type: text/html; charset=UTF8');
  //filemtime() 查看文件的修改时间 返回int
  /*
  
  该函数实现文件缓存功能 $time 缓存的秒数 $filename 文件路径名称

  */

  function chahefile($c,$filename) //参数 
  {
   if(is_file($filename))
    {
    $times=filemtime($filename);
    if((time()-$times)>$c)
       {
       file_put_contents($filename,date("Y-m-d H:i:s"));//写进去
       }
       readfile($filename);//写完直接读出来
    }
   else
    {
     echo "文件不存在";
     touch($filename);
     return;

    }
   

  }

  chahefile(10,"times.html");


  ?>