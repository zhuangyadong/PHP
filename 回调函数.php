<?php
//----------------1 
	header("content-type:text/html;charset=utf-8");

	//回调函数

	function sum($i,$j){
		return $i+$j;
	}


	function fun($a,$b,$k){
		echo $k($a,$b);
	}

	fun(1,2,"sum");
 ?>