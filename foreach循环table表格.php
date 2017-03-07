<?php
header("content-type:text/html;charset=utf-8");

$name = array("1"=>"智能机器人","2"=>"数码相机","3"=>"天翼3G手机","4"=>"瑞士手表");
$price = array("1"=>"14998","2"=>"2588","3"=>"2666","4"=>"66698");
$counts = array("1"=>1,"2"=>1,"3"=>2,"4"=>1);
echo '<table width="580"border="1"cellpadding="1"cellspacing="1"bordercolor="#fff"bgcolor="#c117e50">
            <tr>
                <td width="145"align="center"bgcolor="#fff" class="STYLE1">商品名称</td>
                <td width="145"align="center"bgcolor="#fff" class="STYLE1">价格</td>
                <td width="145"align="center"bgcolor="#fff" class="STYLE1">数量</td>
                <td width="145"align="center"bgcolor="#fff" class="STYLE1">金额</td>
</tr>';
foreach ($name as $key=>$value){//--------------以book数组做循环，输出键和值
    echo '<tr>
            <td height="25"align="center"bgcolor="#fff" class="STLE2">'.$value.'</td>
            <td align="center"bgcolor="#fff" class="STLE2">'.$price[$key].'</td>
            <td align="center"bgcolor="#fff" class="STLE2">'.$counts[$key].'</td>
            <td align="center"bgcolor="#fff" class="STLE2">'.$counts[$key]*$price[$key].'</td>
</tr>';
}

?>