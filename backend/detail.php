<?php
include "conn.php";//数据库连接

//获取前端传入的sid
if(isset($_GET['sid'])){//存在
    $sid = $_GET['sid'];//获取
    $result=$conn->query("select * from tmall_goods where id = $sid ");//返回sid对应得数据
    echo json_encode($result->fetch_assoc());//输出json格式
}