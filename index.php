<?php

	header("content-type:text/html;charset=utf-8");

    $arr[]="奥巴马";
    $arr[]="美国";
    $arr[]="60";

    print_r($arr);
    echo "<br>";
    echo $arr[0].'在'.$arr[1].'今年'.$arr[2];

?>