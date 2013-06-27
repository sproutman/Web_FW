<?php session_start(); include("../conn/conn.php");$furl=getenv("HTTP_REFERER");
$query="delete from tb_chartroom_user where username='$lmbs'";  //删除对应的用户
mysql_query($query);
$now=date("y-m-d h:i:s");   //获取当前时间
$query="update  tb_chartroom_logs set outtime='$now' where loguser='$username'and timestamp(outtime)=0";
//在日志文件中添加信息,注意,上面OUTTIME由于是时间类型,不能直接用outtime=0或outtime='',而要用timestamp函数返回时间戳
mysql_query($query);
//在message表中写入有人被删除的语句,
$contents=$username."被永久删除账号!";
$time=date("h:i:s");   //获得当前时间
$query="insert into tb_chartroom_messages(touser,fromuser,time,content,color)values('所有人','管理员','$time','[公告]:$contents','red')";
$result=mysql_query($query);
 echo "<meta http-equiv=\"Refresh\" content=\"2;url=$furl\">";
?>