<?php session_start(); include("../conn/conn.php");$furl=getenv("HTTP_REFERER");?>
<title>���Թ���</title>
<?php 
$mesid=$_GET['mesid'];   //��ý���ɾ��������ID
$query="delete from tb_chartroom_messages where mesid='$mesid'";  //��message����ɾ������
$result=mysql_query($query);
 echo "<meta http-equiv=\"Refresh\" content=\"2;url=$furl\">";
?>