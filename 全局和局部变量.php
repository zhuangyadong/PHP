<?php
//----------------1 
	header("content-type:text/html;charset=utf-8");

	$num=10;

	function fun(){
		$num=20;
		return $num;
	}
	$num=fun();
	echo $num;
 ?>