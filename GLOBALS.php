<?php

$username1="user1";
function show(){
    $GLOBALS[username1]="user2";
}







show();
echo "<pre>";
print_r($GLOBALS);
echo "</pre>";
