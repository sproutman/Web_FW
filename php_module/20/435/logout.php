<?php session_start(); include("conn/conn.php");
       $username=$_SESSION[username];
       $query="delete from tb_chartroom_online where username='$username'";   //��online����ɾ����ǰ�û�
       mysql_query($query);
       $now=date("y-m-d h:i:s");     //ȡ�õ�ǰʱ�������
       $query="update tb_chartroom_logs set outtime='$now' where loguser='$username' ";
       mysql_query($query);
       if($username!=""){
       $contents=$username."�˳�������!";  //��message����д�������˳������ҵĻ���
       $time=date("y-m-d G:i:s");//ȡ�õ�ǰʱ��,��Ҫ����
       $select='ico//em12.gif';
       $query="insert into tb_chartroom_messages(touser,fromuser,time,content,color)
	           values('������','����Ա','$time','[����]:$contents','red')";
       $result=mysql_query($query); } ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�˳�������</title>
</head>
<body>
<?php 
   session_unregister(username);//ɾ����ע�����
   session_unregister(password);//ɾ����ע�����
   echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\">3����ת���¼ҳ,���Ե�...</p>";  ?> 
</body>
</html>
