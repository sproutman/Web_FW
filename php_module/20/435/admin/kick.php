<?php session_start(); include("../conn/conn.php");$furl=getenv("HTTP_REFERER");?>
<title>在线用户管理</title>
<?php 
$query="delete from tb_chartroom_online where username='$lmbs'";   //删除要踢出的用户从online表中
$result=mysql_query($query);
session_unregister(username);
$now=date("y-m-d h:i:s");   //获得当前时间
$query="update tb_chartroom_logs set outtime='$now' where loguser='$lmbs' ";   //在logs表中记录该用户被踢出的时间
//注意.上面的OUTTIME由于是时间类型,不能直接用outtime=0或outtime='',而要用timestamp函数返回时间戳  
$result=mysql_query($query);
$contents=$lmbs."被踢出聊天室!";
$time=date("h:i:s");    //取得当前时间,不要日期
$query="insert into tb_chartroom_messages(touser,fromuser,time,content,color)values('所有人','管理员','$time','[公告]:$contents','red')";
$result=mysql_query($query);
 echo "<meta http-equiv=\"Refresh\" content=\"2;url=$furl\">";
?>
