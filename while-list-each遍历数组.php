<?php

	header("content-type:text/html;charset=utf-8");

    $arr[0]='zhuang';
    $arr[1]=30;

    print_r($arr);
    echo "<br>";
    while (list($key,$val)=each($arr)){
        echo $key.$val;
        echo "<hr>";
    }
?>