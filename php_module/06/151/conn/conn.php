<?php 
$id=mysql_connect("localhost","root","root")or dir('连接服务器失败:'. mysql_error());
if(mysql_select_db("db_database06",$id)){
echo "";
}else{echo ('连接数据库失败:'. mysql_error());}
mysql_query("set names gb2312");
?>