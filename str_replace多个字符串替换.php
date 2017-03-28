<?php
header("content-type:text/html;charset=utf-8");

$str = "http://localhost/www/abc/www/index.php";

$src = array("http","localhost","www","index");

$rep = array("ftp","baudu","web","页面");
//$cnt = 1;
echo str_replace($src,$rep,$str);


?>