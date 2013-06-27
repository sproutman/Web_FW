<?php session_start(); include("../conn/conn.php");$furl=getenv("HTTP_REFERER");?>
<title>留言管理</title>
<?php 
$mesid=$_GET['mesid'];   //获得将被删除的留言ID
$query="delete from tb_chartroom_messages where mesid='$mesid'";  //从message表中删除留言
$result=mysql_query($query);
 echo "<meta http-equiv=\"Refresh\" content=\"2;url=$furl\">";
?>