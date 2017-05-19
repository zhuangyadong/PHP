<?php
//----------------1 
	header("content-type:text/html;charset=utf-8");

	$num=10;



	function fun(&$i){
		$i++;
	}
	fun($num);
	echo $num;
 ?>
