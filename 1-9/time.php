<?php
    //放假时间  2021-1-30 18:00:00
    $end =  strtotime("2021-1-30 18:00:00");
    $seconds = $end - time();           //到结束时间所剩余的秒数


    $response = [
        'errno' => 0,
        'msg'   => 'ok',
        'data'  => [
            'seconds'   => $seconds
        ]
    ];

    echo json_encode($response);




