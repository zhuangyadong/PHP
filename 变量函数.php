<?php
//----------------1 
	header("content-type:text/html;charset=utf-8");

	function sum($i,$j){
		return $i+$j;
	}
	$a="sum";

	echo $a(4,5);
	echo "<br>";
	$b="sum";
	echo $b(9,7);
 ?>