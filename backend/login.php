<?php
include "conn.php";
//获取前端传入的用户名，进行存在检测
if(isset($_POST['user'])){//检测前端传入的用户名是否存在
    $user = $_POST['user'];
    $result = $conn->query("select * from registry_login where username='$user'");
    if($result->fetch_assoc()){//存在用户名
        //判断密码
        // echo '{"pm":5}';
        if(isset($_POST['pass'])  ){
            $pass = sha1($_POST['pass']);
            $result = $conn->query("select * from registry_login where username='$user' and password='$pass'");
            if($result->fetch_assoc()){
                echo '{"pm":3,"msg":"登录成功"}';
            }else{//登录失败
                echo '{"pm":4,"msg":"登录失败"}';
             } 
        }
    }else{//用户名不存在
        echo '{"pm":2,"msg":"用户名不存在"}';
    }
}

