<?php

	header("content-type:text/html;charset=utf-8");

    $arr[0]='zhuang';
    $arr[1]=30;

    print_r($arr);

    list($key1,$key2)=$arr;

    echo $key1;
    echo $key2;

?>