<?php
  header('Content-type: text/html; charset=UTF8');
  /*

  面向对象继承

  */
    /*

    魔术方法：在特定条件下会自动调用的方法(通常用他做初始化)
    系统预定义好的，不能自定义
    __set() 设置 在外部直接设置私有属性的值时会自动调用的方法
    __get() 获取 在外部直接获取私有属性的值时会自动调用的方法
    __isset() 在外部直接查看私有成员属性是否存在时会自动调用的方法
    __unset() 在外部直接删除私有成员属性是否存在时会自动调用的方法
    */


    /*
    继承  

    增加程序开放性，可扩充性，增加代码重用性，提高软件可维护性 
    有相同属性或方法可以把公共部分定义为父类 基类 用子类取扩展父类 
    关键字 extends
    子类可以继承父类所有的属性和方法 
    父类private 子类中不能使用 
    protected 在父类和子类中都可使用但是类外不能使用

    */

  /*
  电视机对象  面向对象的写法汇总 继承的魔术方法的写法
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

    /*魔术方法获取私有属性*/

    function __get($proname)
    { 
    	if($proname=="brand")
       {
         echo "品牌不允许查看<br/>";/*私有属性判断设置为不允许查看*/
       }
        else
        {
          echo "_________".$this->$proname."<br/>";
        }
    }

    /*魔术方法设置私有属性*/

    function __set($proname,$val)
    {
        if($proname=="price")
        {
            if($val>=$this->$proname*0.9)
            {
               $this->$proname=$val;
            }
        }
        

    }
    /*属性是否存在*/
  /*  function __isset($proname)
    { 
      echo "^^^^^^^^^^^^^^^^^^<br/>";
      return isset($this->$proname);
    }
    function __unset()
    {
      echo "………………………………………………<br/>";
      return unset($this->$proname);
    }
*/



    
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
   $get=new Tv("7000","飞利浦","60","是","否");
   $get->price=6400;
   $get->brand="suoni";
   $get->brand;
   $get->price;
   $get->play()."<br/>";
  

  ?>