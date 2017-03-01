<?php
//----------------1 
	header("content-type:text/html;charset=utf-8");

	$num=10;

	function fun(){
		global $num;
		$num=50;
		
	}
	fun();
	echo $num;
 ?>