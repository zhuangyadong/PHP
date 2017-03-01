<?php
//----------------1 
	header("content-type:text/html;charset=utf-8");

	for ($i=1; $i<=9; $i++) { 
		for($y=1;$y<=$i;$y++){
			echo "$y*$i=".($i*$y)."&nbsp;&nbsp;&nbsp;&nbsp;";
		}
		echo "<br>";
	}
	
 ?>