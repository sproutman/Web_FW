<?php
           $conn=mysql_connect("localhost","root","root") or die("���ݿ���������Ӵ���".mysql_error());
           mysql_select_db("db_database20",$conn) or die("���ݿ���ʴ���".mysql_error());
           mysql_query("set names gb2312");
?>