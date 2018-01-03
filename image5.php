<?php 
  /*图片翻转 这个好像不对*/

  //延y轴翻转
  $res=imagecreatefrompng("img/1.png");
  $w=imagesx($res);
  $h=imagesy($res);
  $new=imagecreatetruecolor($w, $h);
  for($x=0;$x<$w;$x++){
   imagecopy($new,$res,$w-$x-1,0,$x,0,1,$h);//拷贝图像的一部分
  }
  imagepng($new,"img/1_4.png");
  imagedestroy($res);
  imagedestroy($new);
  ?>