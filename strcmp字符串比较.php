
<?php
header("content-type:text/html;charset=utf-8");

    //-------------strcmp比较字符串，如果$a>$b则返回1，相反则返回-1，相等返回0，小写字符比大写字母要大（一般大32）
  $a = "user2";
  $b = "user1";

  var_dump(strcmp($a,$b));

?>