<?php
  header('Content-type: text/html; charset=UTF8');
  /*
  
  封装：private 
  允许在类中使用不能在外部使用 
  不必要在外部访问的属性或方法 用private 封装起来
  或者你不想让外部访问的属性或方法 
  封装的属性还可以通过方法来限制属性
   
  
  */


  /*
  手机对象

  */
  class mobie
  {
   private $age="20";
   public function getage()
   {
     echo $this->age;
   }
   public function setage($age)//修改函数
   {
     $this->age=$age;
   }

  }

 $p1=new mobie();
 $p1->setage(50);
 echo $p1->getage()."<br/>";//封装

 /*private 可以修饰属性 方法 类 外部均不能调用*/

 /*
  电视机对象  面向对象的写法汇总
 */

 class Tv
 {
 	
 	private $price;
 	private $brand;//品牌
 	private $size;
    private $highdefinition;//高清
    private $Three; //3d


    function __construct($price,$brand,$size,$highdefinition,$Three)
    //构造函数 public 公共方法 必须要可以实例化对象
    {
       $this->price=$price;
       $this->brand=$brand;
       $this->size=$size;
       $this->highdefinition=$highdefinition;
       $this->Three=$Three;

    }

    function getprice()
    {
     echo $this->price."<br/>";
    }

    function setprice($p) //修改价格
    {
     if($p>=$this->price*0.9)
      {
      	$this->price=$p;
      }
     else
      {

      	echo "对不起您的价格达不到优惠条件,还是按照原先价格<br/>";
      }
    }

    function getbrand()
    {
     echo $this->brand."<br/>";
    }

     function gethighdefinition()
    {
     echo $this->highdefinition."<br/>";
    }

     function getsize()
    {
     echo $this->size."<br/>";
    }

     function getThree()
    {
     echo $this->Three."<br/>";
    }


    function sell()
    { 
     if($this->size>=50&&$this->highdefinition=="是"&&$this->price<=5000)
      { 
       return true;
      }
      else if($this->size>=60&&$this->highdefinition=="是"&&$this->price<=7000)
      {
       return true;
      }
      else
      {
       return false;
      }
     
    }

    private function poweron()
    {
       echo "电视打开<br/>";
    }


    private function poweroff()
    {   
       echo "电视关闭<br/>";
    }

    function isHave()
    {
      if($this->size>=50&&$this->highdefinition=="是"&&$this->price<=5000)
      { 
       return true;
      }
      else if($this->size>=60&&$this->highdefinition=="是"&&$this->price<=7000)
      {
       return true;
      }
      else
      {
       return false;
      }


    }
    function play()
    {  if($this->isHave())
       {
        $this->poweron();
        echo "电视播放中……<br/>";
        $this->poweroff();
       }
       else
       {
        echo "播放错误<br/>";
       }
       
    }
 


 }
   $get=new Tv("6888","飞利浦","60","是","否");
   $get->setprice(5000)."<br/>";
   $get->getprice()."<br/>";
   $get->play()."<br/>";
  

  


  ?>    
