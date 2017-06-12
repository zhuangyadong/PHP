<?php
//----------------1 
	header("content-type:text/html;charset=utf-8");
	$sex=0;
	if($sex==0){
		echo "<h1>女</h1>";
	}else{
		echo "<h1>男</h1>";
	}

	echo "<br>";
//-----------------2
	$name="小妹妹";
	$score=55;

	if($score>=60){
		echo "<h1 style='color:green'>{$name}恭喜您已及格</h1>";
	}else{
		echo "<h1 style='color:red'>很遗憾</h1>";
	}
 ?>
