<?php
           $conn=mysql_connect("localhost","root","root") or die("数据库服务器连接错误".mysql_error());
           mysql_select_db("db_database20",$conn) or die("数据库访问错误".mysql_error());
           mysql_query("set names gb2312");
?>
