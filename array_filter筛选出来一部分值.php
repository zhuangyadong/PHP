<?php

$arr=array("user1"=>40,"user2"=>50,"user3"=>60,"user4"=>70,"user5"=>80,"user6"=>90);
function jige($val){
    if($val>=60){
        return true;
    }
}

$arr2=array_filter($arr,"jige");

echo "<pre>";
print_r($arr2);
echo "</pre>";

?>
