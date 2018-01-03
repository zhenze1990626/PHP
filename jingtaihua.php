<?php 
  header('Content-type: text/html; charset=UTF8');
  /*
   优化网站的响应时间
   1、动态页面静态化    页面中的一些东西不经常改动适用，是有效的加速方法
   2、优化数据库
   3、使用负载均衡
   4、使用缓存

   php 静态化
   纯静态 伪静态
   局部纯静态 全部纯静态

  */

  /*ob_start();
  echo 1;
  echo "<br/>";
  echo ob_get_contents();//php 缓冲区中保存的数据
  //php.ini 中output_buffering=on
*/

  file_put_contents("index.shtml","ghghghjghjhj");//生成index.shtml文件并且在其中写入一些内容

  ?>