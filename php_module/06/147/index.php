<?php session_start();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>����ϵͳ��־��Ϣ</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 12px}
.STYLE2 {
	color: #E29150;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width="427" height="235" border="0" cellpadding="0" cellspacing="0" background="images/bg.jpg">
<form name="form1" method="post" action="index_ok.php">
  <tr>
    <td width="88" height="86">&nbsp;</td>
    <td width="60">&nbsp;</td>
    <td width="88">&nbsp;</td>
    <td width="157">&nbsp;</td>
    <td width="34">&nbsp;</td>
  </tr>
  <tr>
    <td height="25">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><input name="username" type="text" id="username" size="22"> 
      <span class="STYLE2">*</span> 
	  <?php $data=date("Y-m-d h:i:s");?>
      <input name="data" type="hidden" id="data" value="<?php echo $data;?>"></td>
    <td>&nbsp;</td>
  </tr>
  <?php $work="��Ʒ¼�빤��";?>
  <tr>
    <td height="38">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><input name="password" type="password" id="password" size="22">
      <span class="STYLE2">*</span>
      <input type="hidden" name="work" value="<?php echo $work;?>"></td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td height="34">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center" valign="middle"><input type="submit" name="Submit" value="�ύ"></td>
    <td valign="middle"><input type="reset" name="Submit2" value="����"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td colspan="3" align="center"><span class="STYLE1">��Ȩ����:����ʡ���տƼ����޹�˾</span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  </form>
</table>
</body>
</html>
