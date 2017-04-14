<?php
header("content-type:text/html;charset=utf-8");

$sub = "https://www.baidu.com/web/imdex.php?id=10";
$pth = '/.*/';
preg_match($pth,$sub,$mats);
echo "<pre>";
print_r($mats);
echo "</pre>";






