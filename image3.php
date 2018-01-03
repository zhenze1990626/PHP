<?php 
  /*图片剪切*/
  header('Content-type: text/html; charset=UTF8');

 $res=imagecreatefrompng("img/1.png");
 $new=imagecreatetruecolor(100,60);
 imagecopyresized($new, $res, 0, 0, 20, 80, 100, 60, 100, 60);
 imagepng($new,"img/1_2.png");
 imagedestroy($res);
 imagedestroy($new);
  ?>