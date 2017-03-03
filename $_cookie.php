<?php
    header("content-type:text/html;charset=utf-8");

    setcookie("name","suer1",time()+3600,"/");
    echo "<pre>";
    print_r($_COOKIE);
    echo "<pre>";

?>