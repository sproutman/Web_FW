<?php 
$id=mysql_connect("localhost","root","root")or die('数据库连接失败:'. mysql_error());
if(mysql_select_db("db_database06",$id))
echo "";
else
echo ('连接失败:'. mysql_error());
mysql_query("set names gb2312");





?>