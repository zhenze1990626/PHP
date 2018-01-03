<?php
  

  /*
   PHP文件下载

   如果是浏览器不认识的文件类型，浏览器直接让下载，如果是浏览器认识的文件类型，直接解释执行
  */
  header("Content-type:image/png");
  header("Content-Disposition:attachment;filename='1.png'");
  header("Content-length:3000000");
  readfile('1.png');
  ?>