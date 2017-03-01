<?php
//----------------1 
	header("content-type:text/html;charset=utf-8");

	$days=28;
	echo "<table width='700' border='1px'>";
	for($i=1;$i<=$days;){
		echo "<tr>";

			for($y=1;$y<=7;$y++){
				if($i>$days){
					echo "<td>&nbsp;<td/>";
				}else{
					echo "<td>{$i}</td>";
				}
				$i++;
			}

		echo "</tr>";
		}

	echo "</table>"
	
	
 ?>