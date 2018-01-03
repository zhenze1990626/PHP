<?php 
 
/*
  php 画图

  1.创建画布 imagecreatetruecolor()
  2.画各种图形
  3.输出或保存图片

  
  imagephg(资源),imagegif(资源),imagejpj(资源),第二个参数是保存图片的地址和文件名，如果第二个参数不定义，则是输出图片
  
  4.释放资源
  imagedestroy(资源);

*/

//创建画布
$res=imagecreatetruecolor(500,500);

//在画布上画各种图形


//为资源分配颜色（imagecolorallocate）
$red=imagecolorallocate($res,0xff,0x0,0x0);
$white=imagecolorallocate($res,0xff,0xff,0xff);
$blue=imagecolorallocate($res,0,0,255);
$green=imagecolorallocate($res,0,255,0);
$black=imagecolorallocate($res,0,0,0);
//为资源填充颜色（imagefill）
imagefill($res,0,0,$red);

//画一个矩形 imagerectangle(空心)
/*imagerectangle($res,20,20,400,200,$blue);

//画一个矩形 imagefilledrectangle(填充矩形实心)
imagefilledrectangle($res,10,10,200,100,$green);

imageline($res,0,0,500,500,$black);
imagepolygon($res, array (
                    0, 0,
                    100, 200,
                    300, 200
             ),
             3,$blue);

//画点(imagesetpixel)
imagesetpixel($res,79,120,$blue);
imagesetpixel($res,58,12,$blue);
imagesetpixel($res,45,120,$blue);
imagesetpixel($res,12,189,$blue);
imagesetpixel($res,0,56,$blue);
imagesetpixel($res,0,454,$blue);

//画圆,椭圆(imageellipse)

imageellipse($res,250,250,60,30,$black);
imageellipse($res,250,250,60,60,$green);


//画圆,椭圆(imageellipse)

imagearc($res,100,100,10,100,270,360,$black);//最后一个参数是IMG_ARC_PIE
//imagefilledarc($res,100,100,10,100,270,360,$black);

//画数字
//imagettftext($res,50,45,300,300,$green,"FZSTK.TTF","李想");

//水平方向画一个字符串
imagestring($res, 12, 50, 50, "ghgjhg", $white);

//垂直方向画一个字符串
imagestringup($res, 12,100, 150, "tyutyut", $white);

//水平方向画一个字符 imagechar()
//垂直方向画一个字符 imagecharup()

imagechar($res,5,100,100,"p",$white);
imagecharup($res,5,50,450,"h",$white);*/
/*//画一个字体(imagettftext)
imagettftext($res,50,45,300,300,$green,"微软雅黑","李想");*/

//输出图像

header('Content-type:image/gif;charset=UTF8');
imagegif($res);

//销毁资源
imagedestroy($res);




?>