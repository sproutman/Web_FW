<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>IPת��</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>
<script language="javascript">
function deal(myform){
	var ip=form1.ip.value;
	objExp=/(\d+).(\d+).(\d+).(\d+)/;
	if(ip==""){
		alert("������IP��ַ!");form1.ip.focus();return;
	}
	if(objExp.test(ip)){
		myform.ipNum.value=convert(ip);
	}else{
		alert("�������IP��ַ���Ϸ�!");form1.ip.focus();return;
	}
}
</script>
<script language="javascript">
function convert(ip){
	ip=ip.split(".");
	vip=ip[0]*255*255*255+ip[1]*255*255+ip[2]*255+ip[3]*1;
	return vip;
}
</script>

<body>
<table width="250" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#666666"><table width="250" height="100" border="0" cellpadding="0" cellspacing="1">
     <form name="form1" method="post" action="index.php">
	  <tr>
        <td height="25" colspan="2" bgcolor="#666666"><div align="center" class="STYLE1">IP��ַת��</div></td>
      </tr>
      <tr>
        <td width="60" height="25" bgcolor="#FFFFFF"><div align="right">IP��ַ��</div></td>
        <td width="187" bgcolor="#FFFFFF">&nbsp;<input type="text" name="ip" size="18" class="inputcss"></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="right">��Ӧ���֣�</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="text" name="ipNum" size="18" class="inputcss"></td>
      </tr>
      <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input name="Button" type="button" class="buttoncss"onClick="deal(form1)"value="ת��" />
</div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
</body>
</html>
<br>
