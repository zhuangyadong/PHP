<?php

	header("content-type:text/html;charset=utf-8");

    $arr=array("a","b",array("c","d"),array('e',array("f","j")));

    foreach($arr as $val){
        if(is_array($val)){
            foreach ($val as $val2){
                if(is_array($val2)){
                    foreach ($val2 as $val3){
                        echo $val3."<br>";
                    }
                }else{
                    echo $val2."<br>";
                }
            }
        }else{
            echo $val."<br>";
        }
    }
?>