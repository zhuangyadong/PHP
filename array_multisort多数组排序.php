
<?php

$arr=array("aaaa","bbbbbbbbbbbbb","cc","ddddddd");

//需求：
    //1.按照标题长度排序

    //2.标题长度变成标题字符串的key

foreach ($arr as $val){
    $lens[]=strlen($val);
}
array_multisort($lens,SORT_ASC,$arr);
sort($lens);

$arr2=array_combine($lens,$arr);

echo "<pre>";
print_r($arr2);
echo "<pre>";
?>
