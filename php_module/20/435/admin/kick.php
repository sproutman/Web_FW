<?php session_start(); include("../conn/conn.php");$furl=getenv("HTTP_REFERER");?>
<title>�����û�����</title>
<?php 
$query="delete from tb_chartroom_online where username='$lmbs'";   //ɾ��Ҫ�߳����û���online����
$result=mysql_query($query);
session_unregister(username);
$now=date("y-m-d h:i:s");   //��õ�ǰʱ��
$query="update tb_chartroom_logs set outtime='$now' where loguser='$lmbs' ";   //��logs���м�¼���û����߳���ʱ��
//ע��.�����OUTTIME������ʱ������,����ֱ����outtime=0��outtime='',��Ҫ��timestamp��������ʱ���  
$result=mysql_query($query);
$contents=$lmbs."���߳�������!";
$time=date("h:i:s");    //ȡ�õ�ǰʱ��,��Ҫ����
$query="insert into tb_chartroom_messages(touser,fromuser,time,content,color)values('������','����Ա','$time','[����]:$contents','red')";
$result=mysql_query($query);
 echo "<meta http-equiv=\"Refresh\" content=\"2;url=$furl\">";
?>
