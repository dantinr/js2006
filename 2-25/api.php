<?php

// 从数据库中查询 商品列表
$goods =  [
    [
        "goods_id"      => 111,
        "goods_name"    => "IPhone 4",
        "goods_price"   => 998
    ],
    [
        "goods_id"      => 222,
        "goods_name"    => "IPhone 5",
        "goods_price"   => 1188
    ],
    [
        "goods_id"      => 333,
        "goods_name"    => "IPhone 6",
        "goods_price"   => 1288
    ],
    [
        "goods_id"      => 444,
        "goods_name"    => "IPhone 7",
        "goods_price"   => 1888
    ],

];


// 将 php的数组转为 接口中的  JSON字符串
echo  json_encode($goods);

