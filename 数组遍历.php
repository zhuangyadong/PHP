<?php

	header("content-type:text/html;charset=utf-8");

    $arr=array('ni',2,3,4,5,6,7,8,9,10);
    for($i=0;$i<=10;$i++){
        echo "<h1>{$arr[$i]}</h1><br>";
    }

?>