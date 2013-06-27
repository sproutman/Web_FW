<?php
	$link=mysql_connect("localhost","root","root") or die("数据库连接失败".mysql_error());
	mysql_select_db("db_database15",$link);
	mysql_query("set names gb2312");
?>
