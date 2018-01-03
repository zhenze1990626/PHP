<?php 
  header('Content-type: text/html; charset=UTF8');
  //字符串比较
  // strlen()获取字符串长度
  //获取中文长度 mb_strlen

  /*$str = "我爱你";
  echo mb_strlen($str,"UTF8");*/


  /*
  函数截取 

  1、英文字符串的截取函数substr()

  函数说明：substr(字符串变量,开始截取的位置，截取个数）
  echo substr($str, 2, 4)

  2、中文字符串的截取函数mb_substr()

  函数说明：mb_substr(字符串变量,开始截取的位置，截取个数, 网页编码）
  echo mb_substr($str, 4, 2, 'utf8')

  查找字符串
  $str = 'I want to study at imooc';
  $pos = strpos($str, 'imooc');  //19

  替换字符串
  $str = 'I want to learn js';
  $replace = str_replace('js', 'php', $str);
  echo $replace;  //I want to learn php;
  
  格式化字符串
  sprintf()

  字符串合并
  $arr = array('Hello', 'World!');
  $result = implode('', $arr);
  print_r($result);//结果显示Hello World!

  字符串分割

  $str = 'apple,banana';
  $result = explode(',', $str);
  print_r($result);//结果显示array('apple','banana')

  */
  $a1="jkjh";
  $a2="khkjhhjhjh";
  echo strcmp($a1,$a2)."<br/>";//返回-1，第一个变量比第二个变量小
  echo strncmp($a1,$a2,1)."<br/>";//-1 第三个参数是说位置是第几个
  echo strcasecmp($a1,$a2)."<br/>";//-1 不区分大小写的全串比较
  //相似度
  similar_text($a1,$a2,$p);//42%6gtrf
  echo $p."<br/>";

  //截取字符串
  echo substr("123456",2,4)."<br/>";//3456

  //去除空格和字符串填补函数

  //ltrim(str); 去除字符串左侧的空格和其他预定义字符
  //rtrim(str); 去除字符串右侧的空格和其他预定义字符
  //trim(str); 去除字符串两侧的空格和其他预定义字符


  //按需求对字符串进行填补
  echo str_pad("$a2",20,"nav",STR_PAD_BOTH)."<br/>";//前两个参数是必选项分别是字符串和个数，后两个参数是可选项，分别是填充项和填充位置 STR_PAD_BOTH  STR_PAD_LEFT STR_PAD_RIGHT 默认是 STR_PAD_RIGHT

  //strtoupper()//转换为大写
  //strtolower()//转换为小写
  //ucfirst()//首字母大写
  //ucwords() //空格分割的单词首字母大写

  //nl2br()//换行
  //htmlspecialchars()//将html标记中的特殊字符转换为html实体


  //删除html标签 strip_tags()
  $str="<font color='red'>linux</font><i>Apache</i><u>Mysql</u><b>PHP</b>";
  echo strip_tags($str)."<br/>";
  echo strip_tags($str,"<font>")."<br/>"; 


  //其他字符串格式化函数
  //strrev 字符串反转
  echo strrev("http://www.baidu.com")."<br/>";

  //number_format() 千位分组来格式化数字
  $n=123456;
  echo number_format($n)."<br/>";//123,456
  echo number_format($n,2)."<br/>";//123,456.00 两位小数
  echo number_format($n,2,",",".")."<br/>";//123.456.00 点分割 两位小数

  //md5() 密码加密
  //默认返回一个32位的十六进制字符串

  $h1="jhgjhgjh";
  echo md5($h1)."<br/>";

  if(md5($h1)=='7af283056f53e10ce498a51d6b754868'){
    echo "密码一致，登陆成功";
  }


 //字符串比较函数

  //按字节顺序进行比较
  //strcmp() strcasecmp()  后者忽略大小写
  /*str1=str2  返回0
  str1>str2  返回1
  str1<str2  返回-1*/

  //按照自然顺序进行字符串比较
  //strnatcasecmp() strrev() //前者忽略大小写进行自然顺序的字符串比较 

  ?>