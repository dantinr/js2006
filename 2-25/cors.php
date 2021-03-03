<?php

    $arr = [
        "name"  =>  "zhangsan",
        "age"   => 22,
        "time"  => date("Y-m-d H:i:s")
    ];

    echo json_encode($arr);
