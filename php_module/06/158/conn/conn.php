<?php 
$id=mysql_connect("localhost","root","root") or die('����ʧ��:' . mysql_error());
if(mysql_select_db("db_drop",$id))
  echo "";
 else
  echo ('���ݿ�ѡ��ʧ��:' . mysql_error());
mysql_query("set names gb2312");
?>