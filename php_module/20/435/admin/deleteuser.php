<?php session_start(); include("../conn/conn.php");$furl=getenv("HTTP_REFERER");
$query="delete from tb_chartroom_user where username='$lmbs'";  //ɾ����Ӧ���û�
mysql_query($query);
$now=date("y-m-d h:i:s");   //��ȡ��ǰʱ��
$query="update  tb_chartroom_logs set outtime='$now' where loguser='$username'and timestamp(outtime)=0";
//����־�ļ��������Ϣ,ע��,����OUTTIME������ʱ������,����ֱ����outtime=0��outtime='',��Ҫ��timestamp��������ʱ���
mysql_query($query);
//��message����д�����˱�ɾ�������,
$contents=$username."������ɾ���˺�!";
$time=date("h:i:s");   //��õ�ǰʱ��
$query="insert into tb_chartroom_messages(touser,fromuser,time,content,color)values('������','����Ա','$time','[����]:$contents','red')";
$result=mysql_query($query);
 echo "<meta http-equiv=\"Refresh\" content=\"2;url=$furl\">";
?>