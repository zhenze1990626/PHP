<?php 
  header('Content-type: text/html; charset=UTF8');
  /*
  文字加水印
  */
   $res=imagecreatefrompng("img/1.png");
   $col=imagecolorallocate($res,0,255,255);
   imagettftext($res,30,60,100,120,$col,"wenzi.ttf","董诗海");//文字加水印 参数分别是资源，像素，角度，大小，颜色，文件名，文字
   imagepng($res,"img/logo.png");
   imagedestroy($res);//还可以用一个函数给封装起来然后调用即可

   /*
   图片水印

   */
   $res=imagecreatefrompng("img/1.png");
   $mark=imagecreatefrompng("img/2.png");
   $w=imagesx($mark);
   $h=imagesy($mark);
   imagecopy($res,$mark,70,10,0,0,$w,$h);
   imagepng($res,"img/3.png");
   imagedestroy($res);
   imagedestroy($mark);
  ?>