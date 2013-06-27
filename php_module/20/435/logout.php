<?php session_start(); include("conn/conn.php");
       $username=$_SESSION[username];
       $query="delete from tb_chartroom_online where username='$username'";   //从online表中删除当前用户
       mysql_query($query);
       $now=date("y-m-d h:i:s");     //取得当前时间和日期
       $query="update tb_chartroom_logs set outtime='$now' where loguser='$username' ";
       mysql_query($query);
       if($username!=""){
       $contents=$username."退出聊天室!";  //在message表中写入有人退出聊天室的话语
       $time=date("y-m-d G:i:s");//取得当前时间,不要日期
       $select='ico//em12.gif';
       $query="insert into tb_chartroom_messages(touser,fromuser,time,content,color)
	           values('所有人','管理员','$time','[公告]:$contents','red')";
       $result=mysql_query($query); } ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>退出聊天室</title>
</head>
<body>
<?php 
   session_unregister(username);//删除已注册变量
   session_unregister(password);//删除已注册变量
   echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\">3秒钟转入登录页,请稍等...</p>";  ?> 
</body>
</html>
