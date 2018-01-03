<?php
  header('Content-type: text/html; charset=UTF8');


  /*
     final 只能用来修饰类和方法 不能用来修饰成员属性  
     final 修饰的类不能被继承
     final 修饰的方法不能被子类重写 是最终的方法

     */

       /*
     static 只能修饰成员属性和成员方法，不能修饰类
     1.类中的静态属性和静态方法不用实例化就可以直接使用类名访问
     格式：
     类：：$静态属性
     类：：静态方法
     2.再类的方法中，不能用this来引用静态属性和静态方法，需要用self来引用
     格式：
     self：：$静态属性
     self：：静态方法
     3.静态方法中不可以使用非静态的内容 就是不能使用$this
     4.在一个类的方法中如果没有出现$this的调用默认此方法为静态方法
     5.静态属性是共享的也就是new很多对象也是共用一个属性

     __construct() 不是静态方法 普通方法可以创建静态成员

     */

     /*
     类里面定义常量用的是const关键字 只能修饰成员属性
     常量定义时必须初始化 用self 关键字访问 不能改
     
     const CONSTANT="KJKJJ";
     类内部访问：
     echo self::CONSTANT;
     类外部访问：
     echo ClassName::CONSTANT;

     instanceof 操作符 实例化检测 访问true或false

     $p1=new person();
     $p1=$p3;//不是克隆，只是把两个对象引用都指向内存
     $p4=clone($p1);//克隆方法

     */

     
   class mao
  {

    public $name;
    protected $height;//受保护的成员 只有自身和子类可以访问
    public $weight;
    private $serect;//不能被子类访问
    public function eat($food)
   {
     echo $this->name."'s eating".$food."\n";

   }
  }


/*
子类中扩展构造方法  function __construct()
{
	parent::__construct() 
	子类中的重载的方法的访问的权限不能低于父类中的重载方法的访问权限，
	就是说访问的权限只能放大而不能缩小
	在子类中使用parent 访问父类中被覆盖的属性和方法 parent::fun() 
}


*/


/*方法名相同 子类将覆盖父类的方法 叫做方法重载*/
   class person extends mao

    {

      public $team="bull";
      public $number="23";
      private $age="28";
    /*构造方法   是类中的一种方法 php5中的标准命名 是实例化对象时第一个自动调用的方法*/
     function __construct($name,$height,$weight,$team,$number)
     {
       $this->name=$name;
       $this->height=$height;
       $this->weight=$weight;
       $this->team=$team;
       $this->number=$number;

     }

/*    魔术方法

      function __clone() //调用对象的克隆方法时自动调用的方法 $this代表副本 $that表示原本
      {
        $this->name="xiaoniao";
      	
      }
      

      function __tostring() //直接输出对象时调用的方法，该方法必须返回一个字符串
      {
      	 return "这个对象不让输出<br/>"; //可以返回且只能返回字符串
      }
  
      */


      /*

      当调用一个未定义或者不可见的方法时,__call()会被调用

      */
     function __call($method,$pros)
     {
       echo "您调用的方法不能访问";  //提示调用不可用的方法
 

     }     



     public function Age()
     { //通过公共方法访问私有类

      echo $this->name."'s age is".$this->age."\n"."<br/>";
     }


	}

      $hehe=new person ("dsh","168cm","63kg","jordon team","23");
      echo $hehe->team."<br/>";
      // echo $hehe->height."<br/>"; 外面不能访问私有成员
      $hehe->Age();
      echo $hehe->number."<br/>";
      $hehe->eat("apple");//在子类对象上可以直接访问父类的方法和属性
      $hehe->Ag();

     

  ?>