<?php session_start(); include("../conn/conn.php");
       if($name=="mr"){  ?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>������ע���û����� </title>
<style type="text/css">
<!--
.style1 {font-size: 12px}
body {
	background-color: #EFF3FF;
}
.style2 {color: #FF0000}
.STYLE3 {font-size: 14px}
-->
</style>
</head>
<body><div align="center">
<table width="100%"  border="1" cellpadding="0" cellspacing="0">
   <tr align="center" valign="middle" bgcolor="#DCF7D9">
     <td height="25" colspan="4" class="style2 STYLE3">�������û�����</td>
    </tr>
   <tr align="center" valign="middle" bgcolor="#DCF7D9">
      <td class="style1">�û���</td>
      <td class="style1">ע��ʱ��</td>
      <td class="style1">���ʴ���</td>
      <td class="style1">����</td>
   </tr>
<?php  $query="select * from tb_chartroom_user where regid";
        $result=mysql_query($query);
	    while($myrow=mysql_fetch_array($result)){ ?>
   <tr>
      <td align="center" class="style1"><?php echo $myrow[username];?></td>
      <td align="center" class="style1"><?php echo $myrow[regtime];?></td>
<?php $quer="select * from tb_chartroom_logs where loguser='$myrow[username]'";
       $resul=mysql_query($quer);
       $log_times=mysql_num_rows($resul); ?>
       <td align="center" class="style1"><?php echo $log_times;?></td>
       <td><a href='deleteuser.php?lmbs=<?php echo $myrow[username];?>' class="style1">ɾ��</a></td>
   </tr> <?php }?>
  </table>
</div>
</body></html>
<?php }else{ echo "������ȷ��¼!";
echo "<meta http-equiv=\"Refresh\" content=\"2;url=adminlogin.php\">";} ?>