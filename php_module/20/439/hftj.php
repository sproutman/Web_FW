<?php 
session_start();
include "conn/conn.php";
if  ($_SESSION[username]==""){
echo "���ȵ�¼,�ſ��Իظ���Ϣ!!";
echo "<meta http-equiv=\"Refresh\" content=\"2;url=index.php\">";
}else{
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>���տƼ���̳</title>
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	font-family: "����";
}
.style2 {
	font-size: 13px;
	font-family: "����";
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #EFF3FF;
}
-->
</style>
</head>
<script src="js/zc_check.js"></script>
<body>
<div align="center"><?  include"head.php";?></div>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" background="images/555.gif">
  <tr>
    <td width="15">&nbsp;</td>
    <td width="760" height="30"><span class="style1">&nbsp;&nbsp;== �ظ�������Ϣ == </span></td>
  </tr>
</table>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="776">
	<table width="776"  border="0" align="center" cellpadding="0" cellspacing="0">
	<?php  
             $query="select * from tb_zqlb where id='$lmbs'";
             $result=mysql_query($query); 
             $row=mysql_fetch_array($result);
    ?>
        <tr>
          <td width="5" height="361" align="center" valign="top" background="images/zc1.gif">&nbsp;</td>
          <td width="230" align="center" valign="top">
		  <table width="88%"  border="0" cellpadding="0" cellspacing="0">
		  
			  <?php $query="select * from tb_mruser where  username='$username'";
			         $result=mysql_query($query);
					 $user=mysql_fetch_array($result); 
					 $ip=getenv(remote_addr);
			  ?>
              <tr>
                <td height="30" align="center" valign="middle" class="style2"><span class="style2">==�ظ�����Ϣ==</span></td>
              </tr>
              <tr>
                <td height="36" align="center" valign="middle" class="style2"><?php echo $user[username];?></td>
              </tr>
              <tr>
                <td height="40" align="center" valign="middle" class="style2">����:<?php echo $user[sex];?>��</td>
              </tr>
              <tr>
                <td height="39" align="center" valign="middle" class="style2"><?php echo $user[email];?></td>
              </tr>
              <tr>
                <td height="32" align="center" valign="middle" class="style2"><?php echo $user[qq];?></td>
              </tr>
              <tr>
                <td height="34" align="center" valign="middle" class="style2">IP:<?php echo $ip;?></td>
              </tr>
          </table></td>
          <td width="10" background="images/zc2.gif">&nbsp;</td>
          <td width="522" align="center" valign="top"><table width="88%%" height="52"  border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td class="style2">&nbsp;&nbsp;ԭ����:&nbsp;&nbsp;<?php echo $zhuti;?></td>
            </tr>
          </table>
            <table width="88%"  border="0" cellpadding="0" cellspacing="0">
			 <form name="myform" method="post" action="fbzt_ok.php" enctype="multipart/form-data" >
              <tr>
                <td width="18%" height="35" align="center" class="style2">�ظ�����:</td>
                <td><input name="hfzt" type="text" id="hfzt" size="50" maxlength="100">
				
				</td>
              </tr>
              <tr>
                <td height="235" align="center" class="style2">�ظ�����:</td>
                <td align="left" valign="top" class="style2"><textarea name="hfnr" cols="48" rows="15" wrap="PHYSICAL" id="hfnr"></textarea>
                
				  <input name="ljid" type="hidden" id="ljid" value="<?php echo $row[id];?>">
				  <input name="zq" type="hidden" id="zq" value="<?php echo $row[zq];?>">                 </td>
              </tr>
              <tr>
                <td height="35" align="center">&nbsp;</td>
                <td class="style2"><input name="hftj" type="submit" id="hftj" value="�ظ��ύ">
                <input type="reset" name="Submit2" value="��Ϣ����"></td>
              </tr>
		      </form>
          </table>          </td>
          <td width="9" align="center" valign="top" background="images/zc3.gif">&nbsp;</td>
        </tr>
    </table></td>
  </tr>
</table>
<div align="center"><?php include"under.php"?></div>
</body>
</html>
<?php }?>