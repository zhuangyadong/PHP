
<?php
header("content-type:text/html;charset=utf-8");

  $str = "字符串函数内容工具转到项目";

  echo mb_substr($str,4,3,"utf-8");
?>