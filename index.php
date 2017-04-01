<?php
header("content-type:text/html;charset=utf-8");

$str = "https://localhost/www/phpmyadmin/index.php?id=10&name=user1";

$arr = parse_url($str);




parse_str($arr['query'],$arr2);


echo "<pre>";
print_r($arr2);
echo "</pre>";


?>