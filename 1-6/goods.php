<?php

    $goods_id = $_GET['id'];        //接收 GET 传参

    //使用mysqli
    $host = '127.0.0.1';
    $user = 'root';
    $pass = '123456abc';
    $port = 3306;
    $db = 'js2006';

    $mysqli = new mysqli($host,$user,$pass,$db,$port);
    $mysqli->query("set names utf8");

    // 查询
    $sql = "select * from p_goods where goods_id=$goods_id";
    //echo $sql;die;
    $res = $mysqli->query($sql);
    $data = $res->fetch_assoc();

    echo json_encode($data);

