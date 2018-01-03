<?php
  header('Content-type: text/html; charset=UTF8');
  /*

  php 加密技术专题

 1.md5()  单项

  $str="gvvcvcvcvvx";   //默认32为密码保护
  echo md5($str);

 2.crypt()  单项 无法解密
 echo crypt("共和国海关");

 3.sha1()  单项  默认是40位密码保护
 echo sha1("hjhjh");
 echo sha1(sha1("hjhjh"));
 echo sha1(md5("hjhjh"));

 4.地址加密
 urlencode()
 urldecode()
 rawurlencode() 空格将会解码成%20
 rawurldecode()  一样
  

 $str="http://www.baidu.com";
 echo urlencode("$str");


 ?        %3F
 =        %3D
 空格     +
 %        %25
 &        %26
 \        %5C
 +        %2B  后面是转化后的格式

 5. base64_encode()
    base64_decode()
    
 $data="规划金_龟换酒";
 echo base64_encode("$data");
 echo base64_decode("6KeE5YiS6YeRX+m+n+aNoumFkg==");//解码


  */




  ?>