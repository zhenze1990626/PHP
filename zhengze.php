<?php 
  header('Content-type: text/html; charset=UTF8');
  /*
  
  js 正则

  .test()
  .search()
  .match()
  .replace()


  正则匹配成功就会结束，不会继续匹配了
  如果想继续查找需要加标示符g (全局匹配)


  如果不区分大小写则在正则后加i;

  量词:匹配不确定的位数
  +：至少出现一次


  //代表范围的原子

  \d 0-9的数字
  \D 非0-9的数字
  \s 一个空白字符（空格，回车，tab，\f）
  \S 一个非空白字符
  \w 字母，数字，下划线的字符
  \W 非字母数字下划线的字符
  
  //自定义原子 
  [xyz] 匹配方括号中的任何一个原子x或y或z
  [0-9] 匹配一个范围 0-9的数字
  [a-z] 匹配a-z的字母
  [^]   必须放在中括号的最前面，表示取反

  //定界符 用"//"表示

  元字符 用来修饰原子不可单独使用
  * + ？.\b \B

  *  修饰他前面的原子 使其出现0次或多次
  +  修饰他前面的原子 使其出现1次或多次
  ？ 修饰他前面的原子 使其出现0次或1次
  .  在无模式修正符时 代表所有除换行符外的任何字符
  \b 表示一个边界
  \B 表示一个非边界
  {m,n} 自定义原子出现的次数 m,n 都是正整数并且 m<=n ,表示前面的原子可以出现大于等于m并且小于等于n次

  () 1.可以作为大原子使用
     2.可以改变修优先级
     3.可以作为子模式使用
     4.如果（？：）此小括号不作为子模式使用而是大原子或优先级使用
     5.反向引用
     */
   //字符串函数
   //strstr stristr strpos

  
   $su="test hkh jgjhgj";
   echo strstr("$su","hkh"); //从找的的字串开始到最后的字串 区分大小写
   echo stristr("$su","HKH");//从找的的字串开始到最后的字串 不区分大小写
   echo strpos("$su","hkh");//在第几个位置
   echo stripos("$su","HKH");//在第几个位置不区分大小写
   echo substr("$su",3,6);//截取字符串
   echo "<br/>";

   //获取文件名
   $ty="http://www.jgjhgjh.com/file/ff/index.php";
   $ty2="http://localhost/file/ff/1.php";
   $pos=strrpos($ty,'/')+1;
   $filename=substr($ty,$pos);
   echo  $filename;

   //正则函数 字符串匹配
  // preg_match();
   //preg_match_all(pattern, subject, matches)()

   //字符串替换 正则函数
   //str_replace();
   //str_ireplace();
   //preg_replace *关键
   //preg_replace_callback

   //转义字符
   \n //换行
   \r //制表
   \t //回车
   \s //空格
   \S //非空格
   \d //数字
   \D //非数字
   \w //字符（字母，数字，下划线）
   \W //非字符

   //[\u4e00-\u9fa5] 匹配中文还真是个头疼的事，有了这个表达式就好办了

/* 

  PHP常见验证
  
  //进行一般性验证
if (empty($user)) {
    die('用户信息不能为空');
}
if (strlen($user['name']) < 6) {
    die('用户名长度最少为6位');
}
//用户名必须为字母、数字与下划线
if (!preg_match('/^\w+$/i', $user['name'])) {
    die('用户名不合法');
}
//验证邮箱格式是否正确
if (!preg_match('/^[\w\.]+@\w+\.\w+$/i', $user['email'])) {
    die('邮箱不合法');
}
//手机号必须为11位数字，且为1开头
if (!preg_match('/^1\d{10}$/i', $user['mobile'])) {
    die('手机号不合法');
}
echo '用户信息验证成功';
  */


  ?>