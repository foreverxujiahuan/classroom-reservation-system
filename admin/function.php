<?php

function connnetDb(){
    //连接mysql数据库
    $conn=mysqli_connect("localhost","root","root","demo");
    //排除连接数据库异常错误
    if(!$conn){
        die('can not connect db');
    }
    //在mysql中选中myapp数据库
    mysqli_select_db($conn,"demo");
    return $conn;
}