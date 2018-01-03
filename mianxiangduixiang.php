<?php
  header('Content-type: text/html; charset=UTF8');
  /*
   声明定义一个类
   class 类名 [extends 父类] [implements 接口1[接口2……]]
    [成员属性]
    [成员方法]
    phone.class.php
    

  */
    class photo  
    /*步骤1 声明一个类*/

  {   //类的命名规则首字母大写

     /*public $color="白";
     public $paizi="小米";*/

  /*构造方法   是类中的一种方法 php5中的标准命名 是实例化对象时第一个自动调用的方法*/
     function __construct($name,$height,$weight,$team,$number)
     {
       $this->name=$name;
       $this->height=$height;
       $this->weight=$weight;
       $this->team=$team;
       $this->number=$number;
     }


     function callTo()
     {     //属性的命名规则驼峰命名法
	   echo "{$this->paizi}call to someone";
	   /*在类中对象自己的引用用$this,只能在成员方法之中使用*/
	 }

	 /*析构方法 对象销毁时最后一个自动调用的方法 脚本结束对象会自动销毁或人为给对象赋值为null
	 类中如果有资源操作时,在析构方法中销毁资源最合适
	 */
	 function __destruct()
	 {
      echo "再见";

	 }

  }

  $p1=new photo("hehe","170","65","renhe","23"); /*步骤2 实例化对象 可以加参数*/

  /*步骤3 使用对象 $p->调用对象种属性或方法*/

  


 /* echo $p1->color="蓝"."<br/>";//调用属性或方法时不加$
  $p1->mai="jhjkhj";
  echo $p1->mai."<br/>";
  echo $p1->callTo();*/

  echo $p1->number."<br/>";





  ?>