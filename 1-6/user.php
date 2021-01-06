<?php

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

    //TODO 验证用户名是否存在


    // TODO 验证邮箱是否存在


    //TODO 验证手机号是否存在


    // TODO 用户信息入库


    $response = [
        'errno' => 0,
        'msg'   => 'ok'
    ];

    echo json_encode($response);