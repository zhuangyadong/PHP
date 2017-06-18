<?php
//-----------1
	header("content-type:text/html;charset=utf-8");


	for($i=1;$i<=5;$i++){
		
		if($i==3){
			continue;
		}else{
			echo "<h1>{$i}</h1>";
		}
		
	}




	for($x=1;$x<=10;$x++){
		if($x==5){
			break;
		}else{
			echo "<h1>{$x}</h1>";
		}
	}
 ?>
