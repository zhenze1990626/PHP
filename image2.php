<?php
  /*图片缩放*/
  //imagecreatefromgif(文件名)//返回gif图片资源
  //imagecreatefrompng(文件名)//返回png图片资源
  //imagecreatefromjpeg(文件名)//返回jpeg图片资源
  $res=imagecreatefrompng("img/1.png");

  
  $red=imagecolorallocate($res,255,0,0);//定义颜色
  $de=0.5;
  $w=imagesx($res);
  $h=imagesy($res);//获取图片的宽高
  $new=imagecreatetruecolor($w*$de,$h*$de);//缩放
  imagecopyresized($new,$res,0,0,0,0,$w*$de,$h*$de,$w,$h);
  // imageline($res, 0, 0, $w, $h, $red);//画线
 /* echo "<pre>";
  print_r(getimagesize("img/1.png"));
  echo "</pre>";*/
  // header("Content-type:image/png");//之前不能有任何的输出 空格 html echo
  
  imagepng($new,"img/1_1.png"); //设置资源
  imagedestroy($res); //销毁资源
  imagedestroy($new); //销毁资源
 



  ?>