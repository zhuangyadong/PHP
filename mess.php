<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mess</title>
    <style>



        .title{
            width: 200px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            margin: 0 auto;
            border: 1px solid #ccc;
            background: #fafafa;
            overflow: hidden;
        }
        .title span{
            color: red;
        }
        .content{
            width: 500px;
            margin:  0 auto;

        }
        .content div{

            height: 300px;
            border: 1px solid #000;
            color: blue;
        }

    </style>
</head>
<body>
    <div class="title">
        标题：<span><?php echo htmlspecialchars($_POST['title'])?></span>//htmlspecialchars()转实体；
    </div>
    <div class="content">
        内容：<div>
           <?php echo htmlspecialchars($_POST['content'])?>
        </div>
    </div>
</body>
</html>
