<?php
//----------------1 
	header("content-type:text/html;charset=utf-8");

	//静态变量

	$num=0;
	function show(){
		global $num;
		$num++;
		echo "{$num}第次被调用<br>";
	}

	show();
	show();
	show();
	show();
 ?>