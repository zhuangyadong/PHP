<?php
header("content-type:text/html;charset=utf-8");

    $title = htmlspecialchars($_GET['title']);
    $content = htmlspecialchars($_GET['content']);

    $conn = mysql_connect("localhost","root","123");

    mysql_select_db("test");

    mysql_query("set names utf8");

    $sql = "insert into mess(title,content) values('{$title}','{$content}')";

    if(mysql_query($sql)){
        echo "插入数据成功";
    }else{
        echo "插入数据失败";
    }

//echo $sql;