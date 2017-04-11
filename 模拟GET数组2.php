<?php
header("content-type:text/html;charset=utf-8");

$str = "https://localhost/www/phpmyadmin/index.php?id=10&name=user1";

$arr = parse_url($str);




$arr2 = preg_split('/&|=/',$arr['query']);
for ($i = 0;$i<count($arr2);$i++){
    $arr3[$arr2[$i]] = $arr2[++$i];
}

echo "<pre>";
print_r($arr3);
echo "</pre>";

