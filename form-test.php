<?php
header("content-type:text/html;charset=utf-8");

    echo "<form action='mess.php' method='post'>
                标题：<input type='text' name='title'><br>
                内容：<br><textarea name='content' style='width: 500px;height: 300px;margin-left: 45px;resize: none'></textarea><br>
                <input type='submit' value='留言' style='margin: 50px 0 0 100px'>
            
          </form>";


?>