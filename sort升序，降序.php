<?php
    header("content-type:text/html;charset=utf-8");

    $arr = array("a"=>10,"b"=>20,"c"=>30,"d"=>40);

    //arsort($arr);//保留key降序
    //sort($arr);//升序
    rsort($arr);//降序

    echo "<pre>";
    print_r($arr);
    echo "</pre>";

?>