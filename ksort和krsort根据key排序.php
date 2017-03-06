<?php

$arr=array("a"=>0,"b"=>1,"c"=>2,"d"=>5,"e"=>4,"f"=>9,"g"=>7,"h"=>10,"i"=>8);

$arr2=array_flip($arr);

krsort($arr);

//ksort($arr2);

echo "<pre>";
print_r($arr2);
echo "</pre>";
?>