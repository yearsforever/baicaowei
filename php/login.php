<?php
/**
 * Created by PhpStorm.
 * User: tronke
 * Date: 2017/4/8
 * Time: 15:11
 */

header("Content-type:baicaowei/html;charset=utf-8");  //统一输出编码为utf-8
header('Access-Control-Allow-Origin:*');

if(count($_POST)>0){
    $login = $_POST["userlogin"];
    $pwd = $_POST["userpwd"];

    //sleep(3);//为了演示 进度条的效果，开发中不会用。
    $sqlserver='127.0.0.1';
    $sqluser='root';
    $sqlpwd='';
    $sqldb='baicaowei';
    //创建连接
     $conn=new mysqli($sqlserver,$sqluser,$sqlpwd,$sqldb);
    //设置连接的编码
     mysqli_query($conn,"set names utf8");

    if($conn->connect_error){
         print_r("连接失败");
    }else{
        // 执行sql语句
        $sql="select*from user  where user_login='".$login."' and user_pwd='".$pwd."'";

      $result= $conn->query($sql);
        //  $result->num_rows 返回了几条记录
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                print_r(json_encode($row));
            }
        }
    }
} else {
    print_r("没有参数");
}

