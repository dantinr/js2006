<?php
    // 用户授权接口  授权成功后 返回 token(用于标识用户身份)
    $username = $_GET['username'];
    $pass = $_GET['pass'];

    // 验证用户名密码是否一致

    $uid = 123;

    // 生成用户标识  token
    $token = substr(md5($uid.$username.mt_rand(1,9999).time()),10,15);

    //TODO 在服务器端保存一份 token  放在 数据库中 或者 Redis


    $data = [
        'errno' => 0,
        'msg'   => 'ok',
        'data'  => [
            'token' => $token
        ]
    ];

    echo json_encode($data);




