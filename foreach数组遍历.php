<?php

	header("content-type:text/html;charset=utf-8");

    $arr['name']='zhuang';
    $arr['age']=30;
    $arr['sex']='nan';
    $arr[]="abc";




    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    foreach($arr as $key=>$val){
        if($i++%2==0){
            echo "<h1 style='color: aqua'>{$key}:{$val}</h1>";
        }else{
            echo "<h1 style='color: blue'>{$key}:{$val}</h1>";
        }

    }

?>
