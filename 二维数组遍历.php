<?php

	header("content-type:text/html;charset=utf-8");

    $arr=array("a","b",array("c","d"));

    foreach($arr as $val){
        if(is_array($val)){
            foreach ($val as $val2){
                echo $val2."<br>";
            }
        }else{
            echo $val."<br>";
        }
    }
?>