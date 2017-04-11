<?php

header("Content-type:baicaowei/html;charset=utf-8");  //统一输出编码为utf-8
header('Access-Control-Allow-Origin:*');

if(count($_POST) > 0){
    $login = $_POST["userlogin"];
    $u_pwd = $_POST["userpwd"];
    $u_email = $_POST["usermail"];
    $u_phone = $_POST["userphone"];

    //sleep(3);//为了演示 进度条的效果，开发中不会用。
    $sqlserver = '127.0.0.1';
    $sqluser = 'root';
    $sqlpwd = '';
    $sqldb = 'baicaowei';
    //创建连接
    $conn = new mysqli($sqlserver, $sqluser, $sqlpwd, $sqldb);
    //设置连接的编码
    mysqli_query($conn, "set names utf8");

    if($conn->connect_error){
        print_r("连接失败");
    } else {
        // 执行sql语句
        $sql = " insert into user (user_login,user_pwd,user_email,user_phone) VALUES ('".$login."','".$u_pwd."','".$u_email."','".$u_phone."') ";

        $result = $conn->query($sql);
        //  $result->num_rows 返回了几条记录

        $arr = array();
        //   如果是插入，$result 返回及时 0或1
        if($result> 0){
            //大于0 插入成功
            $arr["status"] = 1;
            $arr["str"] = "注册成功";
        } else {
            $arr["status"] = 0;
            $arr["str"] = "注册失败";
        }

        print_r(json_encode($arr));


    }


} else {
    print_r("没有参数");
}

