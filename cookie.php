<?php 
  header('Content-type: text/html; charset=UTF8');
  /*
  cookie 存放在客户端计算机中 小甜饼 web服务器端给客户端的
  session 存放在服务器中
  

  php.ini
  session.save_handler = files       以文件形式保存在服务器端
  session.save_path = "N;MODE;/path" 文件保存目录

  文件查找过慢，超过千万文件数会出现系统问题   小网站没必要

  session.save_handler = memcache    使用memcache方式来保存session
  直接使用memcache 来存储 无法人为干预  所以也不是常用方式
  session.save_path = memcache        memcache服务器的url+端口号

  session.save_handler = user        使用用户自定义方式来保存session
  常用方式  自主控制 session 存储更了解session机制
  session.save_path 选项没有用  之前的session机制不能使用了必须用自定义函数
  session_set_save_handler


  */

  setcookie("user[username]","wojiushiwo",time()+60*60*24);
  setcookie("user[password]",md5("dsh1990626"));
  setcookie("user[email]","2373415330@qq.com");
  /*
   删除cookie

  */
  // setcookie("user[username]");//只指定cookie名称即可删除cookie
  setcookie("user[username]","",time()-1);//当前设置时间已过期也可以删除cookie

  ?>