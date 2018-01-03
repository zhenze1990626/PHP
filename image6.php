<?php 
  /*图片锐化*/
  $res=imagecreatefrompng("img/1.png");
  $w=imagesx($res);
  $h=imagesy($res);
  $new=imagecreatetruecolor($w, $h);
  $de=30;
  //imagecolorat() 取得某点的颜色索引值
  //imagecolorsforindex()  通过索引取颜色数组
  for($x=0;$x<$w;$x++){
    for($y=0;$y<$h;$y++){
       //双重for循环
       //max() 两个参数取大值
       //min() 两个参数取小值
       $color1=imagecolorsforindex($res,imagecolorat($res,$x,$y));
       $color2=imagecolorsforindex($res,imagecolorat($res,$x-1,$y-1));
       $red1=$color1['red'];
       $green1=$color1['green'];
       $blue1=$color1['blue'];
       $red2=$color2['red'];
       $green2=$color2['green'];
       $blue2=$color2['blue'];
       $red=$red2+($de*($red2-$red1));
       $green=$green2+($de*($green2-$green1));
       $blue=$blue2+($de*($blue2-$blue1));
       $red=min(255,max(0,$red));//一种经典用法取临界值
       $green=min(255,max(0,$green));
       $blue=min(255,max(0,$blue));
       $newc=imagecolorallocate($new, $red, $green, $blue);
       imagesetpixel($new,$x,$y,$newc);
    }
  }
  imagepng($new,"img/1_6.png");
  imagedestroy($res);
  imagedestroy($new);
  ?>