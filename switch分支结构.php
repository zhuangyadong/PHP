<?php
//----------------1 
	header("content-type:text/html;charset=utf-8");

	$day=date("w");

	switch($day){
		case 1:
			echo "<h1>今天是星期一</h1>";
			break;
		case 2:
			echo "<h1>今天是星期二</h1>";
			break;
		case 3:
			echo "<h1>今天是星期三</h1>";
			break;
		case 4:
			echo "<h1>今天是星期四</h1>";
			break;
		case 5:
			echo "<h1>今天是星期五</h1>";
			break;
		case 6:
			echo "<h1>今天是星期六</h1>";
			break;
		case 0:
			echo "<h1>今天是星期日</h1>";
			break;

	}
 ?>