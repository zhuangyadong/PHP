<?php
header("content-type:text/html;charset=utf-8");

    echo "<form action='mess.php' method='post'>
                标题：<input type='text' name='title' value=''><br>
      
                内容：<br><textarea name='content' style='width: 300px;margin-left:45px;height: 200px;resize: none'></textarea><br>
                <input type='submit' value='留言' style='margin: 20px 0 0 90px'>
            
          </form>";


?>