<?php
//----------------1 
	header("content-type:text/html;charset=utf-8");

	//静态变量

	function show(){
		static $num;
		$num++;
		echo "第{$num}次被调用<br>";
	}

	show();
	show();
	show();
	show();
 ?>