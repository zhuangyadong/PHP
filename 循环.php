<?php
//----------------1 
	header("content-type:text/html;charset=utf-8");
echo "while 循环";
	$i=1;

	while($i<=5){
		echo "<h1>$i</h1>";
		$i++;
	}

	echo "for循环";

	$num=5;
	for($i=1;$i<=$num;$i++){
		echo "<h1>{$i}</h1>";
	}
 ?>