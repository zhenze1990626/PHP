<?php 
  /*图片旋转*/

 $res=imagecreatefrompng("img/1.png");
 $blue=imagecolorallocate($res,0,0,255);
 $new=imagerotate($res,100,$blue);
 imagepng($new,"img/1_3.png");
 imagedestroy($res);
 imagedestroy($new);
  ?>