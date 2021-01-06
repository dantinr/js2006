<?php
    // php 使用 mysqli连接 MySQL
    $host = '127.0.0.1';
    $port = 3306;

    $user = 'root';
    $pass = '123456abc';
    $db = 'shop2004';           //数据库名


    $mysqli = new mysqli($host,$user,$pass,$db,$port);
    $sql = "select * from p_goods where goods_id=223";
    $res = $mysqli->query($sql);
    $data = $res->fetch_assoc();
    echo '<pre>';print_r($data);echo '</pre>';







