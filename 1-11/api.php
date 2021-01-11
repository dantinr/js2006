<?php

include "pdo.php";
session_start();

$pdo = getPdo();
$user_name = $_GET['name'];
$user_id = $_GET['uid'];

//与seesion中保存的用户比对是否一致
if($user_name==$_SESSION['user_name'] && $user_id==$_SESSION['uid']){

    $sql = "select user_id,user_name,email,last_login,reg_time from p_users where user_id='{$user_id}' and user_name='{$user_name}'";
    $res = $pdo->query($sql);
    $data = $res->fetch(PDO::FETCH_ASSOC);
    $response = [
        'errno' => 0,
        'msg'   => 'ok',
        'data'  => $data
    ];
}else{
    $response = [
        'errno' => 400018,
        'msg'   => '用户信息不匹配',
    ];
}

echo json_encode($response);




