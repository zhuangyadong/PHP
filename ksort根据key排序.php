

<?php
    header("content-type:text/html;charset=utf-8");

    $arr = array("a"=>10,"e"=>20,"c"=>30,"d"=>40);

    $arr2 = array_flip($arr);

    ksort($arr2);

    echo "<pre>";
    print_r($arr2);
    echo "</pre>";

?>