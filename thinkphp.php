<?php 
  header('Content-type: text/html; charset=UTF8');

   //   www.thinkphp.cn  网址
  /*
   thinkphp 步骤

   1.把核心版本解压，放在项目根目录中，编写入口文件index.php
   项目中每一个应用都需要一个入口文件
   前台后台分成两个应用 需要两个入口文件 需要两个入口文件  一个进前台 一个进后台

   tp中的四种url方式
   路由：系统从url参数中分析出当前请求的分组(平台)，控制器和方法的过程就是路由

   1.pathinfo(重点)
   http://localhost/tp/index.php/index/index/id/3/name/dsh

   http://主机名/项目路径/入口文件/控制器名称/方法名/参数名1/参数值1/参数名2/参数值2
   http://主机名/项目路径/入口文件/分组/控制器/操作方法


   2.普通模式
   http://localhost/tp/index.php?m=index&a=index&age=25

   http://localhost/tp/index.php?m=分组&c=控制器&a=操作方法

   3.rewrite模式(伪静态技术)
   apache http.conf 中rewrite 打开 重启服务器

   .htaccess重写文件  复制放在网站的根目录下 就可以去掉入口文件的配置
   http://网址/分组/控制器/操作方法 省略index.php入口文件


   4.兼容模式
   http://localhost/tp/index.php?m=index/index/id/3/name/dsh
   http://网址/index.php?s=/分组/控制器/操作方法

   //http://localhost/shop/index.php?m=Home&c=Index&a=index
   //http://localhost/shop/index.php/Home/index/index

   正确引入css静态文件的最好方式是绝对路径，目录的绝对路径

   



   tp内置常量
   __MODULE__        路由地址的分组信息(/shop/index.php/分组)
   __CONTROLLER__    路由地址的控制器信息(/shop/index.php/分组/控制器)
   __ACTION__        路由地址的操作方法信息(/shop/index.php/分组/控制器/操作方法)
   __SELF__          路由地址的全部信息(/shop/index.php/分组/控制器/操作方法/名称1/值/名称2/值)

   MODULE_NAME       分组名称
   CONTROLLER_NAME   控制器名称
   ACTION_NAME       操作方法名称

   //tp配置文件详解
   thinkphp/conf/conwention.php   系统主要配置文件
   shop/common/conf/config.php    shop项目的全部分组起作用
   shop/Home/conf/config.php      shop项目的Home分组配置文件
   如果存在相同文件后者会覆盖前者


   c函数 读取设置配置变量
   c() 两个参数 设置
   c() 一个参数 读取

   

   smarty 模板标记{} 有冲突
   1.可以在{} 中设置空格
   2.变换符号
   3.标记不在同一行


   //创建model模型类
   
   每个数据表都对应一个model 模型类



   //在tp中使用smarty 
   1.复制libs smarty核心文件到thinkphp 下的lib  vendor第三方类库文件夹下
   2.打开你项目的配置文件，应该在你项目目录 的conf目录下conf.php这个文件

  */
  /* where  设置查询的条件
     limit  限制查询的条数
     field  限制查询的字段
     order  排序查询
     group  分组查询


   */

   //$this->display(模板，模板编码，模板输出类型)
  // $this->show("<b>很快就和空间和空间</b>")  直接显示内容不用再建一个html页面了
  

  ?>