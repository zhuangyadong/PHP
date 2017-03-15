<?php
    header("content-type:text/html;charset=utf-8");

    $arr = array("a"=>0,"b"=>1,"c"=>2);
    function add(&$arr){
//        global $arr;
        foreach ($arr as $key=>$val){
            $arr[$key] = $val+1;
        }
    }
   add($arr);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

?>