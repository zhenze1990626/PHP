<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>

<form method="post" enctype="multipart/form-data" action="">
<input type="file" name="upload"><br/><br/>
<input type="submit" name="sub">
</form>

</body>
</html>
<?php 
/*
php 文件上传

php ini文件上传相关配置

file_uploads = On  上传文件开启

upload_tmp_dir = "F:/wamp/tmp" 文件上传的临时路径


upload_max_filesize =64M 文件上传最大限制

post_max_size  用post方式传输数据的最大限制 必须大于upload_max_filesize 

*/

/*
form 表单的注意事项 
method 的方式必须是post
input type是file
enctype 多媒体文件  enctype="multipart/form-data"
*/



/*
处理上传过来的文件
$_POST 数组接收到的是除了上传以外的数据
$_FILES 专门接收上传上来的数据




一般 对上传上来的文件需要进行修改
1.文件类型做限制
2.上传后文件改名（尽量让用户无法预测到名字但是自己能明白最好用日期加时间再加一串随机数）
3.把文件从临时文件夹拷贝到上传目录下（必须）
4.文件大小限制


*/



print_r($_POST);
print_r($_FILES);
?>