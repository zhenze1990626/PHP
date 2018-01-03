<?php
  header('Content-type: text/html; charset=UTF8');
  //$_FILES 文件上传变量
   print_r($_FILES );

  /*
  $_FILES 
  name 上传文件名称
  type 上传文件类型
  tmp_name 上传到服务器的临时文件名
  size  上传文件大小
  error 上传文件的错误号

  */
  $filename=$_FILES['myfile']['name']; 
  $type=$_FILES['myfile']['type']; 
  $tmp_name=$_FILES['myfile']['tmp_name']; 
  $size =$_FILES['myfile']['size']; 
  $error=$_FILES['myfile']['error']; 

  //将服务器上的临时文件移动到指定文件夹下

  //叫什么名字，移动成功返回true,否则返回false
  // move_uploaded_file($tmp_name,"uploads/".$filename);
  
  //is_uploaded_file() 是否是上传上来的文件
  $dirname=date("Ymd");
  copy($tmp_name,"./uploads/".$dirname.'/'.$filename);


  /*
   php ini 配置 
   1.file_uploads = On  http上传
   2.upload_tmp_dir   临时文件保存目录
   3.upload_max_filesize=64M  允许上传文件的最大数值
   4.max_file_uploads = 20    允许一次上传的最大文件数
   5.post_max_size=8m      post方式发送数据的最大值

  */

   /*
   服务器端限制：
   1.限制上传文件大小
   2.限制上传文件类型
   3.检测是否为真实图片类型
   4.检测是否为http post 方式上传

   */

  ?>