<?php

$arr=array(0,1,2);
function add(&$arr){

    foreach($arr as $key=>$val){
        $arr[$key]=$val+2;
    }
}
add($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";
?>