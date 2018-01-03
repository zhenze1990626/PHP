<?php
  header('Content-type: text/html; charset=UTF8');

//php面向对象 继承
  class Human{
    public $name;
    protected $height;//受保护的成员 只有自身和子类可以访问
    public $weight;
    private $serect;//不能被子类访问
    public function eat($food){
     echo $this->name."'s eating".$food."\n";

    }


  }



  class NbaPlayer extends Human { //extends关键字来表示类的继承，但是只能继承一个类别，后面跟父类的类名 php的单继承原则
  	//定义属性
    public $team="bull";
    public $number="23";
    private $age="26";//只能在类的内部被访问

    //构造函数,在对象实例化的时候自动调用

    function __construct($name,$height,$weight,$team,$number){
 
       $this->name=$name;
       $this->height=$height;
       $this->weight=$weight;
       $this->team=$team;
       $this->number=$number;
    }

    //析构函数

    function __destruct(){

     echo "<br/>"."Destroying".$this->name."\n";

    }  //函数执行完之后执行

   //定义方法
  public function run(){

  	echo "Running\n"."<br/>";
  }

  public function jump(){

  	echo "Jumping\n"."<br/>";
  }

    public function dribble(){

  	echo "Dribbleing\n"."<br/>";
  }

    public function shoot(){

  	echo "Shooting\n"."<br/>";
  }

    public function dunk(){

  	echo "Dunking\n"."<br/>";
  }

    public function pass(){

  	echo "Passing\n"."<br/>";
  }

    public function Age(){ //通过公共方法访问私有类

    echo $this->name."'s age is".$this->age."\n"."<br/>";
  }


}

  /*
   1.静态属性用于保存类的公有数据
   2.静态方法了里面只能访问静态属性
   3.静态成员不需要实例化对象就可以访问
   4.类的内部可以通过self或者static关键字访问自身静态成员
   5.可以通过parent关键字访问父类的静态成员
   6.可以通过类的名称在类的外部访问静态成员
  */



    
    //类到对象的实例化
 
    $hehe=new NbaPlayer("zizi","158cm","60kg","zhijiahge","58");
    echo $hehe->team."<br/>";
    // echo $hehe->height."<br/>"; 外面不能访问私有成员
    $hehe->Age();
    $hehe->eat("apple");//在子类对象上可以直接访问父类的方法和属性

  ?>