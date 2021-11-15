<?php
header('content-type:text/html;charset=utf-8');//设置字符编码
//1.php连接数据库
//mysqli(主机名,用户名,密码,数据库名)
define('HOST','localhost');//主机名
define('USERNAME','root');//用户名
define('PASSWORD','root');//密码
define('DBNAME','js2110');//数据库名
$conn = @new mysqli(HOST,USERNAME,PASSWORD,DBNAME);

if($conn->connect_error){//自定义错误，前面采用容错处理(代码前面添加@)。
    die('连接数据库有误'.$conn->connect_error);
}
//test
//2.设置字符编码
//$conn->query():执行sql语句等相关的代码
$conn->query('SET NAMES UTF8');//设置字符编码。