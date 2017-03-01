<?php
//----------------1 
	header("content-type:text/html;charset=utf-8");

	function fun(){
		echo func_num_args();
		echo "<br>";
		return array_sum(func_get_args());
 	}

	echo fun(5,6,7,8);
	
 ?>