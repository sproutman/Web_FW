<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��֤��������</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
</style>
</head>
<script language="javascript">
function checkmoney(str){
var re=/^[\d.]*$/;
return re.test(str);
}
</script>

<script language="javascript">
function check(){
var value=form1.money.value;
if(form1.money.value==""){
alert("�����뵥�۵Ľ��!"); form1.money.focus();return;
}
if(form1.money.value.indexOf(".")<0){
alert("������Ľ��ĸ�ʽ����!"); form1.money.focus();return;
}
if(!checkmoney(form1.money.value) ||(form1.money.value.length-form1.money.value.indexOf("."))!=3){
alert("������Ľ��ĸ�ʽ����!"); form1.money.focus();return;}
}
</script>

<body>
<table width="450" border="1" cellpadding="0" cellspacing="0" background="images/sddd.JPG">
 <form name="form1" method="post" action="index.php">
  <tr align="center">
    <td height="24" colspan="2"><span class="style1">��֤��������</span></td>
  </tr>
  <tr>
    <td width="222" height="24" align="center"><span class="style1">���:
      <input name="textfield2" type="text" size="20" maxlength="50">
    </span></td>
    <td width="222" align="center"><span class="style1">����:
      <input name="textfield4" type="text" size="20" maxlength="60">
    </span></td>
  </tr>
  <tr>
    <td height="24" align="center"><span class="style1">����:
      <input name="money" type="text" id="money" size="20" maxlength="50">
    </span></td>
    <td align="center"><span class="style1">����:
      <input name="textfield3" type="text" size="20" maxlength="50">
    </span></td>
  </tr>
  <tr>
    <td height="24" align="center"><span class="style1">��Ʒ����:
      <input name="textfield" type="text" size="20" maxlength="50">
    </span></td>
    <td align="center"><span class="style1">��������:
      <input name="textfield5" type="text" size="20" maxlength="60">
    </span></td>
  </tr>
  <tr>
    <td align="right"><span class="style1">
      <input type="submit" name="Submit" value="�ύ" onClick="check();">
    &nbsp;</span></td>
    <td height="24"><span class="style1">&nbsp;
      <input type="reset" name="Submit2" value="����">
    </span></td>
  </tr>
  </form>
</table>
</body>
</html>
