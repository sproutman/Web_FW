<?php 
$id=mysql_connect("localhost","root","root")or die('���ݿ�����ʧ��:'. mysql_error());
if(mysql_select_db("db_database06",$id))
echo "";
else
echo ('����ʧ��:'. mysql_error());
mysql_query("set names gb2312");





?>