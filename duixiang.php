<?php
  header('Content-type: text/html; charset=UTF8');
  class NbaPlayer{
  	//定义属性
   /* public $name="jordan";
    public $height="198cm";
    public $weight="98kg";
    public $team="bull";
    public $number="23";*/

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



}
    
    //类到对象的实例化
 
    $hehe=new NbaPlayer("zizi","158cm","60kg","zhijiahge","58");
    echo $hehe->number."<br/>";
  ?>