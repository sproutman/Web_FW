<?php include "conn/conn.php"; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��֤�뼼����¼</title>
</head>
<style>
td{
font-size:9pt;
}
</style>
<script language="javascript">
	function check(myform){
		if(myform.txt_user.value==""){
			alert("�������û���!");myform.txt_user.focus();return false;		
		}
		if(myform.txt_pwd.value==""){
			alert("����������!");myform.txt_pwd.focus();return false;
		}
		if(myform.txt_yan.value==""){
			alert("��������֤��!");myform.txt_yan.focus();return false;
		}
		if(myform.txt_yan.value!=myform.txt_hyan.value){
			alert("�Բ������������֤�벻��ȷ!");myform.txt_yan.focus();return false;
		}
	}
</script>
<body>
<table width="693" height="346" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/image_01.gif">
	<form name="myform" method="post"  action="checkuser.php">
	<table width="693" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="42" colspan="5">&nbsp;</td>
      </tr>
      <tr>
        <td width="154" height="117" rowspan="4">&nbsp;</td>
        <td height="13" colspan="3" align="center" valign="top">&nbsp;</td>
        <td width="160" rowspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td width="99" height="30" align="right" valign="middle">�û�����</td>
        <td colspan="2" align="left" valign="middle"><input type="text" name="txt_user"></td>
      </tr>
      <tr>
        <td height="30" align="right" valign="middle">��&nbsp;&nbsp;�룺</td>
        <td height="30" colspan="2" align="left" valign="middle"><input type="text" name="txt_pwd"></td>
      </tr>
      <tr>
        <td height="30" align="right" valign="middle">��֤�룺</td>
        <td width="218" height="32" align="left" valign="middle"><input type="text" name="txt_yan">
		<?php
		   $num=intval(mt_rand(1000,9999));
		   for($i=0;$i<4;$i++){
			echo "<img src=images/checkcode/".substr(strval($num),$i,1).".gif>";   //������������ͼ��
		   }
		?> 
		<input type="hidden" name="txt_hyan" id="txt_hyan" value="<?php echo $num;?>" >
</td>
        <td width="62" align="left" valign="middle"><input type="submit" name="Submit" value="��¼" onClick="return check(myform);"></td>
      </tr>
      <tr>
        <td height="62" colspan="5">&nbsp;</td>
      </tr>
    </table>
	</form>
	</td>
  </tr>
</table>
</body>
</html>
