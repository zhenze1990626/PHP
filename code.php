<?php 

  /*

   PHP 验证码制作(数字字母)

  */

  session_start();
  $res=imagecreatetruecolor(100,40);

//在画布上画各种图形


//为资源分配颜色（imagecolorallocate）
$white=imagecolorallocate($res,139,176,205);
//为资源填充颜色（imagefill）
imagefill($res,0,0,$white);
/*

背景数字算法

*/

/*for($i=0;$i<4;$i++){
	$fontsize=6;
	$fontcolor=imagecolorallocate($res,rand(0,120),rand(0,120),rand(0,120));
	$fontcontent=rand(0,9);
    $x=($i*100/4)+rand(5,10);
    $y=rand(5,10);
    imagestring($res,$fontsize,$x,$y,$fontcontent,$fontcolor);

}*/
$code='';
for($i=0;$i<4;$i++){
	$fontsize=6;
	$fontcolor=imagecolorallocate($res,rand(0,120),rand(0,120),rand(0,120));
	$data='abcdefghikmnopqrstuvwxy23456789';
	$fontcontent=substr($data,rand(0,strlen($data)),1);

	$code.=$fontcontent;

    $x=($i*100/4)+rand(5,10);
    $y=rand(5,10);
    imagestring($res,$fontsize,$x,$y,$fontcontent,$fontcolor);

}
$_SESSION['authcode']=$code;



/*

背景小乱点算法

*/

for($i=0;$i<200;$i++){
	$pointcolor=imagecolorallocate($res,rand(50,200),rand(50,200),rand(50,200));
	imagesetpixel($res,rand(1,99),rand(1,29),$pointcolor);

}

/*

线算法

*/
for($i=0;$i<3;$i++){
	$linecolor=imagecolorallocate($res,rand(80,220),rand(80,220),rand(80,220));
	imageline($res,rand(1,99),rand(1,29),rand(1,99),rand(1,29),$linecolor);

}


//输出图像

header('Content-type:image/gif;charset=UTF8');
imagegif($res);

//销毁资源
imagedestroy($res);



  ?>