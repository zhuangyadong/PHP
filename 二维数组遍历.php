<?php

	header("content-type:text/html;charset=utf-8");

    $arr=array("a","b",array("c","d"));
//-----------------------------------------1
//    foreach($arr as $val){
//        if(is_array($val)){
//            foreach ($val as $val2){
//                echo $val2."<br>";
//            }
//        }else{
//            echo $val."<br>";
//        }
//    }

//------------------------------------------2
//    foreach ($arr as $val){
//        if(is_array($val)){
//            foreach ($val as $val2){
//                echo $val2."<br>";
//            }
//        }else{
//            echo $val."<br>";
//        }
//    }

//-----------------------------------------3
//    foreach ($arr as $val){
//        if(is_array($val)){
//            foreach ($val as $val2){
//                echo $val2."<br>";
//            }
//        }else{
//            echo $val."<br>";
//        }
//    }
//------------------------------------------4
    foreach ($arr as $val){
        if(is_array($val)){
            foreach ($val as $val2){
                echo $val2."<br>";
            }
        }else{
            echo $val."<br>";
        }
    }

?>