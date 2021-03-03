<?php
    $pass1 = "123456abc ";

    $str1 = md5($pass1);
    echo $str1;echo '</br>';


    $pass3 = "123456abc";
    $str3 = sha1($pass3);
    echo $str3;echo '</br>';

