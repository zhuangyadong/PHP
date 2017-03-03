<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户详细信息</title>
</head>
<body>
    <h1><?php  echo $_GET["name"]   ?> 的详细信息</h1>
    <hr>
    <h2>姓名：<span style="color: aqua"><?php echo $_GET["name"] ?></span></h2>
    <h2>性别： <?php echo $_GET["sex"] ?></h2>
    <h2> 年龄： <?php echo $_GET["age"] ?></h2>
    <h2>毕业学校：<?php echo $_GET["sch"] ?></h2>
</body>
</html>