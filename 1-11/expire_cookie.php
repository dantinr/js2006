<?php
    //删除cookie  （通过设置cookie的过期时间）
    setcookie('uid','12345',time()-3600);
    echo "清除cookie uid";
