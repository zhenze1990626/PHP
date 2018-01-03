<?php
  header('Content-type: text/html; charset=UTF8');
 class cat
 {
  public $name;
  public $team;
  function __construct($name="hjhj",$team="23")
    //构造函数 public 公共方法 必须要可以实例化对象
  {
       $this->name=$name;
       $this->team=$team;
     
  }


 /* function __autoload($cname)
  { 
   $cname=strtolower($cname); //转换大小写
   include "./{$cname}.class.php";  //这个函数可以确保以后不会大量引入很多的include文件提高工作效率

  }
*/public function getsay()
  {

    echo "我的名字是:{$this->name},我的号码是:{$this->team}";
  }

  public function __sleep()
  {
     return array("name","team");//serialize时自动调用，可以用来做部分串行化若没有此方法则所有的都会被串行化
  }

   public function __wakeup()
  {
     $this->team="kebi";//unserialize时自动调用，可以用来初始化苏醒的对象
  }


}
  $p1=new cat();//实例化对象
  $s=serialize($p1);//串行化并保存对象
  $p2=unserialize($s);//反串行化
  echo $p2->team."<br/>";
  $p2->getsay()."<br/>";



  ?>