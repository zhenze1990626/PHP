<?php
  header('Content-type: text/html; charset=UTF8');
  //预定义数组
   /*echo "<pre>";
   print_r($_REQUEST);//尽量不用这种数据类型传输数据
   echo "</pre>";
   
   echo "<pre>";
   print_r($_GET);//默认是get方式提交数据
   echo "</pre>";

   echo "<pre>";
   print_r($_POST);
   echo "</pre>";*/
   
   /*echo "<pre>";
   print_r($_SERVER);//服务器端变量
   echo "</pre>";*/
   
  /* $i=10;
   echo "<pre>";
   print_r($GLOBALS);//超全局变量
   echo "</pre>";*/

   /*echo "<pre>";
   var_dump($_ENV);//环境变量  //0 empty
   echo "</pre>";*/
   //url 的传值方式
   //http://localhost/shuzu4.php?aa=5&bb=78&cc=80
   //aa=5&bb=78&cc=80  ?后面是变量值

   //数组内置函数

  $arr=array("haha"=>123,"ghjghjg"=>"456","jghjg"=>456,"ghjg",12,56,12);

  $arr2=array(
  	array("1","5",6,8,9,89),
  	array(
  		array("hjkh"=>"23","56","uyuy"=>56),
  		array("jhjhj",56)
  		)

  	);

 $arr3=array("haha"=>123,"ghjghjg"=>"456","jghjg"=>456);

  //返回回来数组中所有的值
  print_r(array_values($arr));

  echo "<br/>";

  
  //返回数组中所有的键名后面加具体数值返回指定的键名
  //如果设置第二个参数则只返回与该值相等的所有键名 如果不存在则返回空数组
  //第三个参数是全等检查
  print_r(array_keys($arr,"456",1)); 
  echo "<br/>";

  //也可以用array_search()查找

  //多维数组的排序
  //array_multisort()
  
  var_dump(in_array("很久",$arr,true));//某一个值在数组中是否存在,第三个参数是全等检查

  echo "<br/>";

  print_r(array_flip($arr));//交换数组中的键名和值的位置，当用这个函数时，如果其中的值有重复的，那么后面的键值会把前面的键值覆盖掉。

  echo "<br/>";

  print_r(array_reverse($arr,true));//会将原来的数组的顺序的值变成相反的顺序输出出来，第二个参数是真的时候会保留原来的键名

  echo "<br/>";

  //计算数组元素的个数，如果第二个参数为真，那么递归计算所有元素  count=sizeof
  echo(count($arr2,1));

  echo "<br/>";

  print_r(array_count_values($arr));
  //返回数组中各个值出现的次数

  echo "<br/>";

  print_r(array_unique($arr));
  //移除数组中重复的值（不分数据类型），保留第一个出现的重复的键名

  echo "<br/>";
  //一个中文字占三个字符

  //回调函数的过滤
  print_r(array_filter($arr,"check"));
  //依据回调函数实现数组过滤

  function check($a)
  {
   if(strlen($a)>3){
      return true;
                   }

  }

  echo "<br/>";

  //遍历执行数组里的所有元素 还是回调函数
  array_walk($arr3,"p");

  function p($val,$key)
  {
   echo "键名:{$key}&nbsp;值:{$val}<br/>";
  }

  echo "<br/>";



  //把第二个和第三个参数数组里的所有元素使用第一个函数名进行操作
  $ary=array("haha","ghj","fjhghjg","ghjgh","tyyuuyvcxvxcv");
  $ary2=array(50,500,60,89,78);
  $ary3=array("haha"=>"ghj","fjhghjg"=>"ghjgh","tyyuuyvcxvxcv"=>"jhjh");
  $ary4=array(50,500,60,89,78,"haha"=>"ghj","fjhghjg"=>"ghjgh","tyyuuyvcxvxcv"=>"jhjh");
  $price=array_map("gameprice",$ary,$ary2);
  function gameprice($ary,$ary2)
  {
     return "{$ary}的零售价是{$ary2}元";

  }
  print_r($price);

  echo "<br/>";


  //排序
  sort($ary);
  //丢掉原键名按照从小到大的顺序排序 sort会丢掉原键名(字母按照ASCII码值排序)
  print_r($ary);
  echo "<br/>";
  //丢掉原键名按照从大到小的顺序排序 sort会丢掉原键名(字母按照ASCII码值排序)
  rsort($ary);
  
  print_r($ary);

  echo "<br/>";

  usort($ary,"bylength");
  //自定义的比较函数对数组中的值进行排序

  function bylength($a,$b){
    if(strlen($a)==strlen($b)){

      return 0;
    }
    return (strlen($a)>strlen($b))?1:-1;

  }
  print_r($ary);

  echo "<br/>";


  //保留键名的按值排序
  asort($ary3);
  print_r($ary3);

  echo "<br/>";


  //按键名排序
  ksort($ary3);
  print_r($ary3);

  echo "<br/>";

  //按照自然数排序并且保留键名
  natsort($ary2);
  print_r($ary2);
  
  echo "<br/>";


  //不区分大小写字母的排序
  natcasesort($ary4);
  print_r($ary4);
  

  echo "<br/>";
  //截取数值中的一段，从第二个参数开始，是第三个参数的长度，如果第二个参数是负数，是从倒着开始计算的
  print_r(array_slice($ary4,3,8,true));

  echo "<br/>";

  //在数组中截取一段，并且用第四个参数数组填充截取掉的这一段数组，他的返回是原数组中被截取掉的那一段数组，并且执行后原数组被替换成执行后的结果
  array_splice($ary4,6,5,array("我就是我","jhkjh","ghhj"));
  print_r($ary4);

  echo "<br/>";

  //合并两个数组，并且把第一个数组的值作为新数组的键名，把第二个数组的值作为新数组的值，并且两个数组的元素的个数必须相同，否则返回false
  $a1=array("hjjh","ljkj");
  $a2=array("hjjh","kk");
  $b=array("a"=>"gg","hjh"=>"hjjh","jjh"=>"kkj");
  $c=array("as"=>"g","hj"=>"hjj","j"=>"kk");

  print_r(array_combine($a1,$a2));

  echo "<br/>";

  //合并一个数组或多个数组，关联数组键名不变，索引数组重新索引
  print_r(array_merge($a1,$a2,$b,$c));
  echo "<br/>";

  //两个数组的交集
  print_r(array_intersect($a1,$a2));

  echo "<br/>";

  //计算数组的差集 第一个参数数组中存在的元素，但不在第二个参数数组中存在的元素
  print_r(array_diff($a1,$a2));

  echo "<br/>";

  //删除数组尾部最后一个元素
  array_pop($a1);
  print_r($a1);

  echo "<br/>";

  //在数组尾部添加元素 并且指定数组
  array_push($a1,"lkkljlk","ljj");
  print_r($a1);

  echo "<br/>";

  //删除数组头部第一个元素
  array_shift($a1);
  print_r($a1);

  echo "<br/>";

  //链表模拟 头部插入
  array_unshift($a1,"jgjh","khkjlk");
  print_r($a1);

  echo "<br/>";
  //头部删除
  unset($a1[5]);//删除第四个元素 //删除任意一个数组元素
  print_r($a1);

  echo "<br/>";

  //随机取出数组的元素下标
  print_r($a1[array_rand($a1,1)]);

  echo "<br/>";

  //打乱原数组
  shuffle($a1);
  print_r($a1);
  echo "<br/>傻逼<br/>";
  //array_sum() 返回数组中所有值的总和

  //range() 函数返回一个包含指定范围的元素的数组



  ?>