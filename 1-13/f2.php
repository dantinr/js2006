<?php

    //使用 file_get_contents发送HTTP GET请求
    $cont = file_get_contents("http://baijiahao.baidu.com/s?id=1688737748297911009");

    echo $cont;

