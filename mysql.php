<?php 
  header('Content-type: text/html; charset=UTF8');
  /*mysql 

  mysql -u root -p 然后输入密码即可
  退出：exit; quit; \q; 均可

  修改提示符
  mysql -uroot -proot --prompt

  \D 完整的日期
  \d 当前数据库
  \h 服务器名称
  \u 当前用户
   
  数据库命令：

  SELECT VERSION();//显示当前服务器版本
  SELECT NOW(); //显示当前日期时间
  SELECT USER(); //显示当前用户


  数据库规范:

  1.关键字与函数名全部大写
  2.数据库名称，表名称，字段名称全部小写
  3.SQL语句必须以分号结尾

  创建数据库：
  1.CREATE {DATABASE | SCHEMA}[IF NOT EXISTS] db_name 
  [DEFAULT] CHARACTER SET[=] charset_name 

  查看当前服务器下的数据列表
  SHOW {DATABASES | SCHEMAS}
  SHOW CREATE DATABASE 数据库名称   数据库创建的时候所使用的指令是多少

  修改数据库
  ALTER {DATABASE |SCHEMA }  [db_name]  CHARACTER SET [=] charset_name  
  
  

  删除数据库
  DROP {DATABASE |SCHEMA }

  mysql 默认端口号是3306
  mysql 中的超级用户是 root

  整形
  TINYINT -128到127  0-255 一个字节
  SMALLINT -32768到32767 0-65535  二个字节
  MEDIUMINT -8388608到8388607 0-2677215 三个字节
  INT -2167483648到2167483647 0到4294967295 四个字节
  BIGINT 8个字节

  浮点型
  FLOAT 单 7位小数
  DOUBLE 双 存储精度是float的10倍

  use 打开数据库
  SELECT DATABASE() 查看当前数据库

  创建数据表

  CREATE TABLE  VARCHAR UNSIGNED 表名称(字段信息1，字段信息2，字段信息3，字段信息4，字段信息5)

  DROP TABLE 数据表名称

  ALERT TABLE 数据表名称 相关操作
  update set 字段名1=值1，字段名2=值2，from 表名 where 条件;//往里面添加字段


  创建数据表实例：
  CREATE TABLE tb1(
     username VARCHAR(20), //名字20个字符以内 字段名 字段类型
     age TINYINT UNSIGNED, //年龄范围无负数
     salary FLOAT(8,2) UNSIGNED, //工资6位无负数
  );


 查看数据表
 SHOW TABLES

 向数据表中写入记录
 INSERT  INTO tbl_name [col_name] VALUES
 INSERT  tb1(username,salary) VALUES('john',4500.69);

 主键约束：PRIMARY KEY
 唯一约束：UNIQUE KEY
 默认约束：DEFAULT
 非空约束：NOT NULL
 常规索引：INDEX
 全文索引：FULL TEXT 

 desc 表名称 创建表结构

 查看 select * from tbl_name

 删除数据
 delete from 表名称 [where]

 更改数据
 UPDATE 数据表


 在整形数据列后面加上UNSIGNED 属性可以禁止负数
 

 MYISAM .frm 存放表结构文件  用MYISAM较多 速度较快
           .MYD 存放表数据
           .MYI 存放表索引

    INNODB .frm   存放所有数据文件    //两个存储引擎的对比

    数据行锁定   M不支持  I支持
    事务处理上   M不支持  I支持
    外键约束     M支持    I支持
    表空间占用   M相对小  I相对大
    全文检索     M支持    I支持

    alter table 表名 change `` `` TINYINT; //修改名称 改变名称 属性均可
    alter table 表名 modify ``  TINYINT; //只可以修改属性
    alter table 表名 add     ``  VARCHAR(20)  //添加字段
    alter table 表名 drop `字段名` //删除字段

    更改表名
    alter table 旧表名 RENAME AS 新表名


    约束类型
    1.not null 非空约束
    2.PRIMARY KEY 主键约束
    3.UNIQUE KEY 唯一约束
    4.DEFAULT 默认约束
    5.FOREIGN KEY 外键约束

    show columns from job; 查看表的详细信息
    alter table job add password varchar(20) unsigned default 10 after name;
    alter table job add PRIMARY KEY(id); //添加主键约束
    alter table job add UNIQUE(username); //添加唯一约束

    show indexes from job\G;//查看索引
    show create table job;//查看表具体内容

    alter table job add FOREIGN KEY (id) REFERENCES procues(id); //参照另一张表中的id 添加外键约束

    alter table job alter age set default 20;//添加默认约束
    alter table job alter age drop default;//删除默认约束

    alter table job drop PRIMARY KEY;//删除主键
    alter table job drop index name; //删除唯一约束

    //删除外键约束 首先 show create table job 查看外键名称

    然后alter table job drop foreign key '外键名'


    //修改位置
    alter table job MODIFY ID 属性 first;
    alter table job change 名字 新名字 属性 first;
    //修改名字，属性，位置均可

    //update 表名 set name='' price='' where id=''

    //修改数据表名字
    alter table job RENAME works;

    auto_increment 递增属性  ``表名称括起来效率更高

    decimal(8,2) //精度较高 1-65 0-30

    复制：标记+选中+回车 然后复制即可

    //修改编码 engine=myisam default charset=utf8
    //set names gbk; 乱码 chcp 65001

    insert 名字 set 属性='',属性=''  //记录写入
    insert 名字 select  属性='',属性=''

    GROUP BY 分组

    子查询修饰 any some all 
    用了 GROUP BY分组后再进行筛选就需要用having 不能用where


    distinct  如果select 查询出来的结果有重复的则删除重复记录
    all 不做任何筛选

    全文索引


    mysql 字符串处理函数
    concat() 连接字符串
    substring(str,x,y) 截取str 中从x 开始长度为y的字符串

  low() upper() 小写/大写
  left(str,x) 从str 左边返回几个字符
  right(str,x) 从str 右边返回几个字符
  lpad(str,20,str2) 从左边填充
  rpad(str,20,str2) 从右边填充
  trim() ltrim() rtrim() 去除左空格 右空格

  replace(str1,str2,str3) 把str1中的str2替换成str3


  mysql> select strcmp(username,'Jio') newname, password from photo;
+---------+----------+
| newname | password |
+---------+----------+
|       0 | 456css   |
|       1 | 56css    |
|      -1 | 5s       |
|      -1 | 5s       |
+---------+----------+
4 rows in set (0.00 sec)  //str1>str2 返回1 < 返回-1 =返回0


数字处理函数
abs()  取绝对值
ceil() 向上取整
floor() 向下取整
round(x,y) 对x四舍五入取y位小数
mod(x,y) 返回x与y的模
rand() 返回0-1的随机数
truncate(x,y)  对x截断取y位小数

时间日期函数
curdate() 返回日期
curtime() 返回时间
now() 日期加时间

mysql> select unix_timestamp()；//返回时间戳
+------------------+
| unix_timestamp() |
+------------------+
|       1491529605 |
+------------------+
1 row in set (0.00 sec)

week()
year()
hour()
minute()
second()
monthname()


流程控制
if(条件，条件符合的结果，条件不符合的结果)



查看mysql支持的所有引擎
show engines;


innodb  技术特点：支持事务，行级锁定，外键


  */

  

  ?>