<?php

	header("content-type:text/html;charset=utf-8");

	//递归函数

	$num=100;
	$tot=0;
	for($i=0;$i<=$num;$i++){
		$tot+=$i;
	}
	echo $tot;
 ?>