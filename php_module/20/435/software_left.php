<?php session_start(); include("conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>无标题文档</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.STYLE1 {font-size: 12px}
-->
</style></head>

<body>
<div align="right">
  <table width="160" height="318" border="0" align="right">
    <tr>
      <td width="182" align="center" valign="top" background="images/left1.jpg"><table width="147" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="30" colspan="2" align="left" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td width="10" height="157" align="left" valign="top">&nbsp;</td>
          <td width="125" align="center" valign="top"><span class="STYLE1">
            <?php $query="select * from tb_chartroom_online where username='$username'";
                   $result=mysql_query($query);
                   $rows=@mysql_fetch_array($result);
                   $usernames=$rows[username];
            ?>            
            <?php  $query="select * from tb_chartroom_online where onid";   //从数据表online查询
                    $result=mysql_query($query);
                    $total=mysql_num_rows($result);  //获得在线总人数
        echo "<p><font color=blue>欢迎</font><font color=red>".$usernames."</font><font color=blue>光临</font></p>";
        echo "<p>聊天室共有".$total."人</font></p>";
        while($user=mysql_fetch_array($result)){
              echo "<font color=red>".$user[username]."</font><br>";}
              $dt=date("G:i:s");   //格式化当前时间
              echo "<br><font color=blue>当前时间</font><br><font color=red>".$dt."</font>";  ?>
          </span></td>
        </tr>
        
      </table></td>
    </tr>
  </table>
</div>
</body>
</html>
