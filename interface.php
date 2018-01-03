<?php
  header('Content-type: text/html; charset=UTF8');

  //interface 关键字用于定义接口
  interface ICanEat{

    //接口里面是的方法不需要有方法的实现
  	public function eat($food);
  }
   //implements关键字用于表示类实现某个接口
  class Human implements ICanEat{

  	public function eat($food){

  		echo "Human eating".$food."\n";
  	}
  }

  $obj=new Human();
  $obj->eat('Apple');





  ?>