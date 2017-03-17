<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>庄亚东</title>
    <style>
        #show{
            width: 500px;
            height: 400px;
            background: #fafafa;
            border: 1px solid #000;
            margin: 0 auto;
        }
        #title{
            width: 200px;
            height: 50px;
            margin: 0 auto;
            text-align: center;
            font-size: 18px;
        }
        #title span{
            color: red;
            font-weight: 600;
        }
        #content{
            width: 400px;
            height: 200px;
            border: 1px solid #000;
            margin: 5px auto;

        }
        #content span{
            font-size: 16px;
            color: blue;
        }
    </style>
</head>
<body>
    <div id="show">
        <div id="title">
            标题：<span><?php echo $_POST['title']?></span>
        </div>
        内容：
        <div id="content">
            <span><?php echo $_POST['content']?></span>
        </div>
    </div>
</body>
</html>