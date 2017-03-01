<?php

	header("content-type:text/html;charset=utf-8");

	//递归函数

    $num=100;
    function sum($num){
        static $tot;

        if($num>=1){
            $tot+=$num;

            sum(--$num);

            return $tot;
        }

    }

    echo sum($num);

?>