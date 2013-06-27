<?php
$conn=mysql_connect("localhost","root","root");
mysql_select_db("db_database13",$conn);
mysql_query("set names gb2312");
if($_POST[vote]=="v1")
 {
  mysql_query("update tb_vote set v1=v1+1 where id=0",$conn);
 }
 if($_POST[vote]=="v2")
 {
  mysql_query("update tb_vote set v2=v2+1 where id=0",$conn);
 }
 if($_POST[vote]=="v3")
 {
  mysql_query("update tb_vote set v3=v3+1 where id=0",$conn);
 }
 if($_POST[vote]=="v4")
 {
  mysql_query("update tb_vote set v4=v4+1 where id=0",$conn);
 }
 if($_POST[vote]=="v5")
 {
  mysql_query("update tb_vote set v5=v5+1 where id=0",$conn);
 }
 $sql=mysql_query("select * from tb_vote where id=0",$conn);
 $info=mysql_fetch_array($sql);
 $TotalVote = $info["v1"] + $info["v2"] + $info["v3"] + $info["v4"] + $info["v5"];
	$v11 = intval((165*$info["v1"])/$TotalVote);
	$v21 = intval((165*$info["v2"])/$TotalVote);
	$v31 = intval((165*$info["v3"])/$TotalVote);
	$v41 = intval((165*$info["v4"])/$TotalVote);
	$v51 = intval((165*$info["v5"])/$TotalVote);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>投票系统</title>
<Link href="font.css" rel=stylesheet>
</head>
<body topmargin="0" leftmargin="0"><br><br><br><br><br>
<table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td><table width="300"  border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#336699">
      <tr align="center" bgcolor="#336699">
        <td height="25" colspan="2"><FONT color=#ffffff><B>你平常最喜欢的娱乐方式是什么？</B></FONT></td>
        </tr>
      <tr>
        <td width="26%" bgcolor="#FFFFFF">1、 骑&nbsp;&nbsp;车：</td>
        <td width="56%" height="25" bgcolor="#FFFFFF"><img src="1.gif" width="<?php echo $v11?>" height=10></td>     
        <td width="18%" height="25" bgcolor="#FFFFFF" align=center></td>         
      </tr>
      <tr>
        <td bgcolor="#FFFFFF">2、打游戏：</td>
        <td width="50%" height="25" bgcolor="#FFFFFF"><img src="2.gif" width="<?php echo $v21?>" height=10></td>     
        <td width="24%" height="25" bgcolor="#FFFFFF" align=center><% Response.Write Application("v2") & "票/" & CInt((Application("v2")/TotalVote)*100) & "%" %></td>  
      </tr>
      <tr>
        <td bgcolor="#FFFFFF">3、唱&nbsp;&nbsp;&nbsp;歌：</td>
        <td width="50%" height="25" bgcolor="#FFFFFF"><img src="3.gif" width="<?php echo $v31?>" height=10></td>     
        <td width="24%" height="25" bgcolor="#FFFFFF" align=center></td>  
      </tr>
      <tr>
        <td bgcolor="#FFFFFF">4、打&nbsp;&nbsp;&nbsp;牌：</td>
        <td width="50%" height="25" bgcolor="#FFFFFF"><img src="4.gif" width="<?php echo $v41?>" height=10></td>     
        <td width="24%" height="25" bgcolor="#FFFFFF" align=center></td>  
      </tr>
      <tr>
        <td bgcolor="#FFFFFF">5、看电视：</td>
        <td width="50%" height="25" bgcolor="#FFFFFF"><img src="5.gif" width="<?php echo $v51?>" height=10></td>     
        <td width="24%" height="25" bgcolor="#FFFFFF" align=center></td>  
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="30" align="center"><a href="index.php">返回投票</a></td>
  </tr>
  <tr>
    <td><hr size="1" noshade></td>
  </tr>
  <tr>
    <td align="center"></td>
  </tr>
</table>
</body>
</html>
