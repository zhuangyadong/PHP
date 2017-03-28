<?php
header("content-type:text/html;charset=utf-8");

$str = "https://localhost/www/phpmyadmin/index.php?id=10&name=user1";

$arr = parse_url($str);
echo "<pre>";
print_r($arr);
echo "</pre>";

$query = $arr['query'];

$arr2 = explode('&',$query);

foreach ($arr2 as $val){
    $arr3 = explode('=',$val);

    $arr4[$arr3[0]]=$arr3[1];

}
echo "<pre>";
print_r($arr4);
echo "</pre>";

?>