<?php
header("content-type:text/html;charset=utf-8");
    
    
    
$arr = array(0,1,2);
function add($val){
    return $val+2;
}
$arr2 = array_map("add",$arr);

echo "<pre>";
print_r($arr2);
echo "</pre>";
?>
