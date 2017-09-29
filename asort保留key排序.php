<?php
    header("content-type:text/html;charset=utf-8");
    $arr = array("a"=>10,"b"=>20,"c"=>30,"d"=>40);
    asort($arr);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

?>
