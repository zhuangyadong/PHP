<?php
header("content-type:text/html;charset=utf-8");

$str = "http://localhost/www/abc/www/index.php";

$arr = pathinfo($str);
echo "<pre>";
print_r($arr);
echo "</pre>";


?>