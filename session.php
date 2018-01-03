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


  
  /* $path="E:/wamp/session/";
   session_set_save_handler("open","close","read","write","destroy","gc"); //自定义session函数
   //启动session 时 session_start时自动调用函数
   function open($path,$name)
   {
    return true;
   }
   //关闭session时自动读取
   function close()
   {
   	return true;
   }
   //使用session数组中的某一个值时
   function read($sid)
   {
   	   global $path;
   	   $filename=$path.$sid;
   	   return @file_get_contents($filename);//file_get_contents — 将整个文件读入一个字符串
   }
   //使用时
    function write($sid,$data)
   {   
   	   global $path;
   	   $filename=$path.$sid;
   	   return @file_put_contents($filename,$data);//file_put_contents — 将一个字符串写入文件
   	 
   }
   //session_destroy() 函数时
    function destroy($sid)

   {   global $path;
   	   $filename=$path.$sid;
   	   return @unlink($filename);
   }
   //垃圾回收的时候
    function gc($mtime)
   {
       global $path;
       foreach(glob($path."*") as $file)
       {
       	if(filetime($file)+$mtime<time())
       	{
       		@unlink($file);
       	}
       }
   }
*/
   

  ?>