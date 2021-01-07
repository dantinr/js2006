<?php

    include "pdo.php";

    $pdo = getPdo();

    $user_name = $_POST['username'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    //判断两次输入的密码是否一致
    if($pass1 != $pass2)
    {
        $response = [
            'errno' => 400008,      //密码不一致
            'msg'   => "两次输入的密码不一致"
        ];
        die( json_encode($response));
    }

    // 判断密码长度是否大于6位
    if(strlen($pass1)<6){
        $response = [
            'errno' => 400009,      //密码长度不够
            'msg'   => "密码长度不够"
        ];
        die( json_encode($response));
    }

    //验证用户名是否存在
    $sql = "select * from p_users where user_name='{$user_name}'";

    $res = $pdo->query($sql);
    $record = $res->fetch(PDO::FETCH_ASSOC);
    //找到记录
    if($record)
    {
        $response = [
            'errno' => 400010,      // 用户名已存在
            'msg'   => "用户名已存在"
        ];
        die( json_encode($response));
    }


    // 验证邮箱是否存在
    $sql = "select * from p_users where email='{$email}'";

    $res = $pdo->query($sql);
    $record = $res->fetch(PDO::FETCH_ASSOC);
    //找到记录
    if($record)
    {
        $response = [
            'errno' => 400011,      // Email已存在
            'msg'   => "Email已存在"
        ];
        die( json_encode($response));
    }


    //验证手机号是否存在
    $sql = "select * from p_users where mobile='{$mobile}'";

    $res = $pdo->query($sql);
    $record = $res->fetch(PDO::FETCH_ASSOC);
    //找到记录
    if($record)
    {
        $response = [
            'errno' => 400012,      // 手机号已存在
            'msg'   => "手机号已存在"
        ];
        die( json_encode($response));
    }

    // 用户信息入库

    //生成密码
    $password = password_hash($pass1,PASSWORD_BCRYPT);
    $sql = "insert into p_users (`user_name`,`email`,`mobile`,`password`)
 values ('{$user_name}','{$email}','{$mobile}','{$password}')";
    $pdo->exec($sql);       //执行SQL
    $id = $pdo->lastInsertId(); //获取自增ID
    if($id>0){  //入库成功
        $response = [
            'errno' => 0,
            'msg'   => 'ok'
        ];
    }else{      //入库失败
        $response = [
            'errno' => 500008,
            'msg'   => '注册失败，请重试'
        ];
    }

    echo json_encode($response);




