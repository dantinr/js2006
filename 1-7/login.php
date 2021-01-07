<?php

    include "pdo.php";

    $pdo = getPdo();
    //接收 post参数

    // 验证用户名是否存在
    $sql = "select ... ";
    $res = $pdo->query($sql);

    if()       //查询到用户
    {
        //验证密码
        if(password_verify()){       //密码正确 登录成功

        }else{  //密码不正确 登录失败

        }
    }else{   //查询不到用户

    }

    //返回json数据




