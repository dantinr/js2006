<?php

    $data = "hello world";          //要发送的数据
    $key = "abcd";                  // 参与生成签名的key

    $signature = hash('sha256',$data.$key);
    $url = "http://api.2006.com/abc.php?data={$data}&sign={$signature}";


    //接收端
    $data = $_GET['data'];          //接收到的数据
    $sign = $_GET['sign'];          //接收到的签名

    $key = "abcd";              //使用与生成签名一致的key
    //验签
    $sign2 = hash('sha256',$data.$key);


    if($sign2 == $sign )        //验签通过
    {

    }else{          //验签失败

    }