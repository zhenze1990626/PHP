<?php 
  header('Content-type: text/html; charset=UTF8');

  E_ERROR //致命的运行错误 会阻止脚本的运行  致命错误的级别

  E_WARNING //运行时错误 非致命错误  警告级别

  E_PARSE //从语法中解析错误

  E_NOTICE //运行时注意消息  通知的错误级别

  E_CORE_ERROR //不包括php核心造成的错误

  E_CORE_WARNING //不包括php核心警告
  
  E_COMPILE_ERROR //致命的编译时错误

  E_COMPILE_WARNING  //致命的编译时警告

  E_USER_ERROR //用户导致的错误消息

  E_USER_WARNING //用户导致的警告

  E_USER_NOTICE //用户导致的注意消息

  E_ALL //所有错误，警告和注意

  E_STRICT   //关于php版本兼容性和互操作性建议

/*
  //php错误报告指令
  display_startup_errors //是否显示php引擎在初始化时遇到的所有错误
  log_errors //确定日志语句记录的位置
  error_log //设置错误可以发送到syslog中
  log_errors_max_len //每个日志项的最大长度
  ignore_repeated_source //忽略发生的重复错误
  track_errors //存储最近发生的错误信息

  //trigger_errors() 来替代die()

  //set_error_handler() //用户自定义错误处理函数

  */



/* php ini 文件
   如何把错误信息放在我们自定义的log文件里
   1.error_reporting 定义错误级别
   2.display_error 关闭在程序中是否显示错误
   3.log_errors 开启错误日志
   4.error_log 定义你的log文件位置
   5.log_errors_max_log=1024
*/

   /*
   如何把错误信息放在我们系统日志里
   1.error_reporting 定义错误级别
   2.display_error 关闭在程序中是否显示错误
   3.log_errors 开启错误日志
   4.error_log syslog
   5.log_errors_max_log=1024
*/

/* 查看日志：

  我的电脑=>管理=>事件查看器=>应用程序中即可看到日志了
*/
//建议：开发阶段把所有错误都输出在屏幕上
        //运营阶段不允许在屏幕上输入任何错误提示把错误提示放在自定义文件中












  ?>