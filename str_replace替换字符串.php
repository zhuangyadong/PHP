<?php
header("content-type:text/html;charset=utf-8");

$str = "http://localhost/www/abc/www/index.php";

//$cnt = 1;
echo str_replace("www","phpwind",$str,$cnt);//$cnt计算被替换多少次

echo "<br>".$cnt;
?>