<?php session_start(); include("conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ޱ����ĵ�</title>
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
            <?php  $query="select * from tb_chartroom_online where onid";   //�����ݱ�online��ѯ
                    $result=mysql_query($query);
                    $total=mysql_num_rows($result);  //�������������
        echo "<p><font color=blue>��ӭ</font><font color=red>".$usernames."</font><font color=blue>����</font></p>";
        echo "<p>�����ҹ���".$total."��</font></p>";
        while($user=mysql_fetch_array($result)){
              echo "<font color=red>".$user[username]."</font><br>";}
              $dt=date("G:i:s");   //��ʽ����ǰʱ��
              echo "<br><font color=blue>��ǰʱ��</font><br><font color=red>".$dt."</font>";  ?>
          </span></td>
        </tr>
        
      </table></td>
    </tr>
  </table>
</div>
</body>
</html>
