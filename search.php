<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form action="" method="post">  
    关键字：  
    <input type="text" name="key" />  
    <input type="submit" name="sub" value="搜索" />  
    </form> 
</body>
</html>

<?php  
    $conn = @mysql_connect("localhost", "root", "dsh1990626") or die("数据库链接错误");  
    mysql_select_db("photo", $conn);  
    mysql_query("set names 'utf8'"); //使用GBK中文编码;  
      
    if(isset($_POST['key'])&&!empty($_POST['key'])) {  
          
        $sql = "SELECT * FROM `list` WHERE content LIKE '%$_POST[key]%'";  
        $query = mysql_query($sql);  
          
        while($r=mysql_fetch_array($query)) {  /*php 站内搜索*/
            
            $r['content']=str_replace($_POST['key'],'<font color="red">'.$_POST['key'].'</font>', $r['content']);//高亮显示语句
            echo "$r[content]"."<br>";  
        }  
    }  



        
?>  