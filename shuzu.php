<?php
  header('Content-type: text/html; charset=UTF8');
  //php数组
  //分为 索引数组和关联数组

 //数组必须用print_r打印才可以
 /* $arr=array(array('xy','56'),array('poi','dui'));
  echo $arr[0][0]."<br/>";
  print_r($arr[0][0]);//二维数组
  //print_r 数组中的值全部都输出出来
  echo "<br/>";*/

  //索引数组
  //$arr[]="aa";//索引数组定义方式1
  //print_r($arr);
  //$arr=array("haha","ghjgjh","ghjgjh");//索引数组定义方式2
  //print_r($arr);


  //关联数组
  /*$arr["id"]=1;
  $arr["name"]="zhangsan";//关联数组定义方式1
  print_r($arr);*/
  //$arr=array("id"=>1,"name"=>"zhangsan","age"=>20,"sex"=>"男");//关联数组定义方式2  //可以混合方式定义
  //print_r( $arr);

 /* $c=array("id"=>1,"姓名"=>"包某","公司"=>"A公司","地址"=>"北京市");
  $id=each($c);
  print_r($id);*/


  //遍历数组的方法
  /*$c=array("id"=>1,"姓名"=>"包某","公司"=>"A公司","地址"=>"北京市");
  echo '一个联系人的信息';
  while(list($key,$value)=each($c)){//第一种遍历数组的方法
    echo "<dd>$key:$value</dd>"; 
  }

  foreach ($c as $key => $value) {//第二种遍历数组的方法
    echo "<dd>$key:$value</dd>"
  }
*/

  
  //phpinfo();//php 配置信息


$fruit=array('苹果','香蕉','菠萝');

for($i=0; $i<3; $i++){

    echo '<br>数组第'.$i.'值是：'.$fruit[$i];

}

$fruit=array('苹果','香蕉','菠萝');
foreach($fruit as $k=>$v){
    echo '<br>第'.$k.'值是：'.$v;

}


$fruit=array('apple'=>"苹果",'banana'=>"香蕉",'pineapple'=>"菠萝");
foreach($fruit as $k=>$v){
    echo '<br>水果的英文键名：'.$k.'，对应的值是：'.$v;
}
  ?>