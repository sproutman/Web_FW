<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��֤�Ϸ������ݱ�����</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
.style2 {
	font-size: 12px;
	color: #FF0000;
}
-->
</style>
</head>
<script language="javascript">
function checkname(tb_name){
	var str=tb_name;
	 //��JavaScript�У�������ʽֻ��ʹ��"/"��ͷ�ͽ���������ʹ��˫����
	var Expression=/(db_database\d{4})/; 	
	var objExp=new RegExp(Expression);
	if(objExp.test(str)==true){
		return true;
	}else{
		return false;
	}
}
</script>
<script language="javascript">
function check(){
var value=form1.tb_name.value;
if(form1.tb_name.value==""){
alert("�����������ݱ�����ƣ�"); form1.tb_name.focus(); return;
}
if(form1.tb_name.value.length!=15 || isNaN(value.substr(11,4))){
alert("����������ݱ����Ƹ�ʽ����ȷ��"); form1.tb_name.focus(); return;
}
if(!checkname(form1.tb_name.value)){
alert("����������ݱ����Ƹ�ʽ����ȷ��"); form1.tb_name.focus();return;}
}
</script>
<body>
<table width="450" border="1" cellpadding="0" cellspacing="0" background="images/sdd.JPG">
<form name="form1" method="post" action="index.php">
  <tr align="center">
    <td height="24" colspan="2"><span class="style1">��֤�Ϸ������ݱ�����</span></td>
  </tr>
  <tr align="center" class="style1">
    <td height="24" colspan="2">�������ݱ�</td>
  </tr>
  <tr align="center" class="style1">
    <td width="99" height="20">���ݱ����ƣ�</td>
    <td width="345" align="left"><input name="tb_name" type="text" id="tb_name" size="20" maxlength="60">
      <span class="style2">    * ���ݱ�ĸ�ʽdb_database0001</span></td>
  </tr>
  <tr align="center" class="style1">
    <td height="20">�ֶ�����</td>
    <td align="left"><input name="tb_count" type="text" id="tb_count" size="15" maxlength="12"></td>
  </tr>
  <tr align="center" class="style1">
    <td height="24" colspan="2"><input type="submit" name="Submit" value="�ύ" onClick="check();">
    &nbsp;&nbsp;      <input type="reset" name="Submit2" value="����"></td>
    </tr>
  </form>
</table>
</body>
</html>
