<?php
header("content-type:text/html;charset=utf-8");

$i = 'W';
for ($n=0; $n<6; $n++){
    echo ++$i . "<br>";
}
?>