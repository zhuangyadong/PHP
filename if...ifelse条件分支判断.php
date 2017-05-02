<?php
//----------------
	header("content-type:text/html;charset=utf-8");
	$score=80;

	if($score>=90){
		echo "<h1>棒棒哒(90分以上呢)</h1>";
	}elseif($score>=80){
		echo "<h1>还不错哦（80分以上呢）</h1>";
	}elseif ($score>=70) {
		echo "<h1>继续加油哦（70分以上呢）</h1>";
	}else{
		echo "<h1>还好意思吗</h1>";
	}
 ?>
