<?php
header("content-type:text/html;charset=utf-8");

$str = "https://image.baidu.com/search/index?tn=baiduimage&ipn=r&ct=201326592&cl=2&lm=-1&st=-1&sf=2&fmq=&pv=&ic=0&nc=1&z=&se=&showtab=0&fb=0&width=&height=&face=0&istype=2&ie=utf-8&word=%E5%BC%A0%E9%A6%A8%E4%BA%88&f=3&oq=zhangxinyu&rsp=0";

$arr = parse_url($str);
echo "<pre>";
print_r($arr);
echo "</pre>";


?>