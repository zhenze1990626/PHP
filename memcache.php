<?php 
  header('Content-type: text/html; charset=UTF8');
  /*
  memcache  分布式缓存系统 只有一张表的数据库
  非持久性存储 对存储的要求不是特别的高
  分布式存储  不适用于单机

  数据库经常查到的信息存在于memcache中 

  */
 
/*
[nosql之缓存memcache]安装篇LInux for Windows

首先呢在PHP开发的过程中会用到很多缓存服务，从而提升访问质量或者临时存储一些数据。

优点 结构简单，读取速度快，易于维护。还有一些特性memcache redis mongodb都可以用来做为缓存用，但他们各自存在有着各自的优点和特性。今天来介绍下mamcache的安装和应用实例：

memcache之windows篇：

下载地址：链接：http://pan.baidu.com/s/1o84cM6I 密码：ycyi

解压放入D盘下 mamcache目录下有一个memcache.exe文件,双击安装就可以了。或者以管理员身份运行dos  执行

C:\Users\lr>d:\memcached\memcached.exe -d install
安装完成后在我的电脑-右键属性-管理-服务-找到mamcache server 选择启动并设置为自动就可以实现开机自启；

在dos里面链接mamcache 可以用 telnet命令：

C:\Users\lr>telnet -h 127.0.0.1 -p 11211
当然win7以上的系统默认没有开启telnet命令开启设置:控制面板-程序与应用-启动或关闭windows功能 里面找到telnet客户端勾选确认等待安装完成即可；

到此windows安装已经完成 稍后统一说memcache的操作命令

下面是Linux下安装memcache:

可以到官网下载当然也可以用我网盘的：链接：http://pan.baidu.com/s/1dFeCHv7 密码：q8vk

主要两个包：memcached-1.4.28.tar.gz 主程序包 和 libevent-1.4.14b-stable.tar.gz 扩展lib包依赖

[root@php-10-10-112-195 memcached]# tar zxvf *.tar.gz
[root@localhost libevent-1.4.14b-stable]# ./configure --prefix=/usr/local/libevent-1.4.14b-stable
[root@localhost libevent-1.4.14b-stable]# make && make install
 

[root@localhost memcache]# tar zxvf memcached-1.4.28.tar.gz | tar zxvf libevent-1.4.14b-stable.tar.gz
安装mamcache:

[root@localhost libevent-1.4.14b-stable]# cd ../memcached-1.4.28/
[root@localhost memcached-1.4.28]# ./configure --prefix=/usr/local/memcache-1.4.5 --with-libevent=/usr/local/libevent-1.4.14b-stable
[root@localhost memcached-1.4.28]# make && make install
创建一个用户用于启动memcache:

[root@localhost memcached-1.4.28]# useradd -r memcached -s /sbin/nologin
[root@localhost memcached-1.4.28]# cat /etc/passwd | grep memcached
memcached:x:993:991::/home/memcached:/sbin/nologin
启动:

复制代码
相关解释如下：
-d选项是启动一个守护进程，
-m是分配给Memcache使用的内存数量，单位是MB，这里是200MB
-u是运行Memcache的用户，如果当前为 root 的话，需要使用此参数指定用户。
-l是监听的服务器IP地址，如果有多个地址的话，我这里指定了服务器的IP地址192.168.1.91
-p是设置Memcache监听的端口，我这里设置了12301，最好是1024以上的端口
-c选项是最大运行的并发连接数，默认是1024，这里设置了256
-P是设置保存Memcache的pid文件，我这里是保存在 /tmp/memcached.pid
停止Memcache进程：
# kill `cat /tmp/memcached.pid`
也可以启动多个守护进程，但是端口不能重复

-d install 安装memcached
-d uninstall 卸载memcached
-d start 启动memcached服务
-d restart 重启memcached服务
-d stop 停止memcached服务
-d shutdown 停止memcached服务
复制代码
更多参数可以：[root@localhost memcached-1.4.28]# /usr/local/memcache-1.4.5/bin/memcached -h

进行查询：下面是我的启动命令很简单：

[root@localhost memcached-1.4.28]# /usr/local/memcache-1.4.5/bin/memcached -u memcached -p 11211 -m 64 -c 1024 &
[1] 52262
[root@localhost memcached-1.4.28]# ps -ef | grep memcache
memcach+  52262  10803  0 18:35 pts/1    00:00:00 /usr/local/memcache-1.4.5/bin/memcached -u memcached -p 11211 -m 64 -c 1024
root      52270  10803  0 18:35 pts/1    00:00:00 grep --color=auto memcache
当然还可以用：

[root@localhost memcached-1.4.28]# netstat -lp | grep memcached
tcp        0      0 0.0.0.0:memcache        0.0.0.0:*               LISTEN      52262/memcached     
tcp6       0      0 [::]:memcache           [::]:*                  LISTEN      52262/memcached     
udp        0      0 0.0.0.0:memcache        0.0.0.0:*                           52262/memcached     
udp6       0      0 [::]:memcache           [::]:*                              52262/memcached     
OK至此linux下的编译安装完成：

当然在linux下还有一种方式安装 yum -y install libevent memcache

就可以安装了。方式跟简单有path  可以再任何路径下 memcached来进行启动或者修改查看帮助等。一样的好用。

linux下的访问也是可以通过telnet 127.0.0.1 11211访问：

进入后：参考待续跳转路径：文章太长*/

 




/*$mem = new Memcache;
$mem->connect("localhost", 11211);//11211端口号
$mem->set('key', 'This is a test!', 0, 60);//测试 memcache搭建成功与否
$val = $mem->get('key');
echo $val;*/



/*第一步   连接memcache 服务器*/
/**
* 
*/

$mem = new Memcache;
$mem->connect("localhost", 11211);//11211端口号
$mem->add("name","tina",MEMCACHE_COMPRESSED,0);//添加
$mem->replace("name","dsh",MEMCACHE_COMPRESSED,0);//覆盖
$mem->set("sex",1,MEMCACHE_COMPRESSED,0);//设置
$mem->delete("sex");//删除某一个具体数值
/*$mem->flush();清空所有memcache的内存数据*/

echo $mem->get("name")."<br/>";
echo $mem->get("sex")."<br/>";
$arr=array("name"=>"我就是我","age"=>30,"height"=>160);
$mem->add("person",$arr);
print_r($mem->get("person"));
$mem->close();//关闭


/*
所需环境：
php 5.3.3
apache 2.2.7
mysql 5.5.8
解压Memcached_1.2.5文档，cmd下执行memcached.exe -d -install
将php5.3_vc6_memcachedll文档解压，将php_memcache.dll文件复制到php安装目录的ext文件目录中。
然后在php.ini 当中填上这句话：extension="php_memcache.dll"
在phpinfo（）下查看，是否引用了memcache扩展。
测试代码：
复制代码 代码如下:
<?php
//连接
$mem = new Memcache;
$mem->connect("127.0.0.1", 11211);
//保存数据
$mem->set('key1', 'This is first value', 0, 60);
$val = $mem->get('key1');
echo "Get key1 value: " . $val ."<br />";
//替换数据
$mem->replace('key1', 'This is replace value', 0, 60);
$val = $mem->get('key1');
echo "Get key1 value: " . $val . "<br />";
//保存数组
$arr = array('aaa', 'bbb', 'ccc', 'ddd');
$mem->set('key2', $arr, 0, 60);
$val2 = $mem->get('key2');
echo "Get key2 value: ";
print_r($val2);
echo "<br />";
//删除数据
$mem->delete('key1');
$val = $mem->get('key1');
echo "Get key1 value: " . $val . "<br />";
//清除所有数据
$mem->flush();
$val2 = $mem->get('key2');
echo "Get key2 value: ";
print_r($val2);
echo "<br />";
//关闭连接
$mem->close();
$memcachehost = '192.168.10.1';
$memcacheport = 11211;
$memcachelife = 60;
$memcache = new Memcache;
$memcache->connect($memcachehost,$memcacheport) or die ("Could not connect");
$query="select * from user limit 10";
$key=md5($query);
if(!$memcache->get($key))
{
        $conn=mysql_connect("192.168.30.1","root","passwd");
        mysql_select_db(users);
        $result=mysql_query($query);
        while ($row=mysql_fetch_assoc($result))
        {
            $arr[]=$row;
        }
        $f = 'db';
        $memcache->add($key,serialize($arr),0,30);
        $data = $arr ;
}
else{
        $f = 'mem';
    $data_mem=$memcache->get($key);
    $data = unserialize($data_mem);
}
echo $f;
echo "";
//print_r($data);
foreach($data as $a)
{
        echo $a[user_id]._.$a[email];
        echo "";
}
?>
*/



/*新闻系统的应用：
复制代码 代码如下:
//==============memcache
$memcachehost = '127.0.0.1';
$memcacheport = 11211;
$memcachelife = 60;
$memcache = new Memcache;
$memcache->connect($memcachehost,$memcacheport) or die ("Could not connect");
//==============新闻
 $sql="SELECT id,title,left(title,16) as biaoti,date_time FROM `p_newsbase` where shenhe='1' order by id DESC limit 7 ";
 $query=$db->query($sql);
 $key=md5($query);
 while($row_news=$db->fetch_array($query)){
  $str=$row_news['biaoti'].$db->time_out($row_news['date_time']);
  $sm_news[]=array("name"=>$str,"title"=>$row_news['title'],"id"=>$row_news['id'],"date_time"=>$row_news['date_time']);
 }
 if(!$memcache->get($key)){
  $memcache->add($key,serialize($sm_news),0,$memcachelife);
 }else{
  $data_mem=$memcache->get($key);
    $sm_news = unserialize($data_mem);
 }
 $smarty->assign("sm_news",$sm_news);*/









  ?>