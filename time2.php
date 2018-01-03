<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>

<style>

table{ width:300px; height:20px; text-align:center;}

</style>
</head>

<body>


<table>
</table>
<?php

function echolist(){
	echo "<tr><td>日</td><td>一</td><td>二</td><td>三</td><td>四</td><td>五</td><td style='border:none;'>六</td></tr>";

	}
echolist();
function weekday(){
	echo "<tr>";
	$m=date("n");
    $y=date("Y");
    $weekdays=date("w",mktime(0,0,0,$m,1,$y));
	$monthdays=date("w",mktime(0,0,0,$m,1,$y));
	for($i=0;$i<$weekdays;$i++){
		echo "<td>$nbsp;</td>";
		
		}
		
	for($j=1;$i<$monthdays;$j++){
		if($i%7==0){
			echo "</tr><tr>";
			
			}
		echo "<td>$j</td>";
		$i++;
		
		}
    echo "</tr>";

	}
weekday();

?>
</body>
</html>