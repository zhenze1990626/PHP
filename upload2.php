
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form action="upload3.php" method="post" enctype="multipart/form-data">
请选择您要上传的文件：
<input type="file"  name="myfile" /><br/>
<input type="submit" value="上传文件" />
</form>
</body>
</html>
<?php
  header('Content-type: text/html; charset=UTF8');

  /*
  文件上传与下载

  文件上传原理：将客户端文件上传到服务器端，然后再将服务器端临时文件移动到指定目录即可。

  */
  


  ?>