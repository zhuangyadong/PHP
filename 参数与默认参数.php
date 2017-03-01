<?php
//----------------1 
	header("content-type:text/html;charset=utf-8");
	function jiutab($num=9,$color="black"){
		for ($i=1; $i<=$num; $i++) { 
			for($y=1;$y<=$i;$y++){
				echo "<font color='{$color}'>"."$y*$i=".($i*$y)."&nbsp;&nbsp;&nbsp;&nbsp;"."</font>";
			}
			echo "<br>";
		}
		echo "<hr>";
	}
	jiutab();
	jiutab(5,pink);
	
	
 ?>