<?php
header("content-type:text/html;charset=utf-8");

echo "变量(\$string1)直接赋值为空null:<br>";
$string1 = null;
$string3 = "str";
if(is_null($string1))
    echo "string1=null";
echo "<p>变量(\$string2)未被赋值";
echo "<br>";
if(is_null($string2))
    echo "string2=null";
echo "<p>被unset()函数处理过的变量(\$string3)";
echo "<br>";
unset($string3);
if(is_null($string3))
    echo "string3=null <br>";

?>