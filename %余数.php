<?php
//----------------1 
	header("content-type:text/html;charset=utf-8");

	for($i=1;$i<=10;$i++){
		
		if($i%3==1){
			echo "<h1 style='color:green'>{$i}</h1>";
		}else{
			echo "<h1 style='color:red'>{$i}</h1>";
		}
		
	}

 ?>