<?php 
  header('Content-type: text/html; charset=UTF8');
  /*
  cookie 存在于客户端的 服务器给客户端的 客户端可以禁用可以删除 但是不能设置 
  由服务器端在客户端连接服务时设置 服务器端可以删除自己的cookie 

  setcookie() 是在服务器端设置cookie的函数，常用前三个参数第一个是变量名，第二个cookie的值，第三个cookie过期的时间戳

  在服务器端获取cookie使用 $_COOKIE['cookie变量名']  在设定的有效期内获取

  session 存在于服务器端
  php ini 相关设置
  session.auto_start=0 是否自动开启session 如果为1则不需要用session_start() 开启session,但是有限制不能把对象传入session
  session.cache_expire=180 设置session 文件在180分钟后过期
  session.cookie_lifetime=0  设置session过期时间 为0时表示浏览器关闭即过期
  session.cookie_path=/  cookie 的有效路径
  session.cookie_domain=; cookie的有效域 
  session.save_handler=files; 用于保存取回数据的控制方式
  session.name=PHPSESSID ;用在cookie里的session名字
  session.use_cookies=1; 在服务器端是否使用cookie;

  session 启动必须使用session_start() 初始化 session_start();
  $_SESSION["username"]="jkgjhg";
  $_SESSION["uid"]=1;//赋值
  $_SESSION["uid"]//读取
  $_COOKIE[session_name()] 获取当前sessionID号

  session 注销

  1.$_SESSION=array() 
  2.if(isset($_COOKIE[session_name()])){
	setcookie(session_name())

  }
  3.session_destroy();//销毁

  php ini 配置文件里面的session.use_trans_sid=1 就会自动在所有的url后面加上sessionid的查询字串，url不需要手动加session字符串了。但是js中的跳转不会自动添加，还必须手动添加。




  */
  
  setcookie('username','tina',time()+3);

  // 删除 ccookie setcookie('变量名');



  ?>