<?php
    $username=$_GET['username'];
    $userpwd=$_GET['userpwd'];
    if($username=='abc'&&$userpwd=='123') {
        echo "登录成功";
    } else {
        echo "登录失败";
    }
?>