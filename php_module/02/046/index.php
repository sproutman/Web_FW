<?php session_start();
   if($Submit==true){
       $s1=$_POST[textfield];
       $s2=$_POST[textarea];
       $s3=$_POST[checkbox];
       $s4=$_POST[radiobutton];
       $s5=$_POST[RadioGroup1];
       $s6=$_POST[select];
	   $s7=$_POST[hiddenField];
      $path = './upfiles/'. $_FILES['files']['name'];
      if(move_uploaded_file($_FILES['files']['tmp_name'],$path)) { 
	       echo "�ϴ��ɹ�!!";
	       echo "<meta http-equiv=\"Refresh\" content=\"20;url=index.php?lmbs=�ļ��ϴ�\">"; }
	  else echo "�ļ��ϴ�ʧ��!!";
           echo "<meta http-equiv=\"Refresh\" content=\"20;url=index.php?lmbs=�ļ��ϴ�\">"; }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��������ۺ�Ӧ��</title>
<style type="text/css">
<!--
.STYLE1 {
	font-size: 14px;
	font-weight: bold;
}
.STYLE2 {font-size: 13px}
.STYLE3 {color: #2B8611}
.STYLE5 {color: #2B8611; font-size: 12px; }
-->
</style>
</head>

<body>
<table width="637" height="424" border="0" cellpadding="0" cellspacing="0" background="images/bg.jpg">
  <tr>
    <td width="650" height="60" align="center" valign="middle"><span class="STYLE1">��������ۺ�Ӧ��</span></td>
  </tr>
  <tr>
    <td height="134" align="center" class="STYLE2">
<form action="index.php" method="post" enctype="multipart/form-data" name="form1">
<table width="450" border="0" cellpadding="0" cellspacing="0">
  
  <tr>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td height="18" align="center" bgcolor="#E1FFE9" class="STYLE3">����ύ����</td>
  </tr>
  <tr>
    <td width="97" align="center"><span class="STYLE2">�ı��ֶ�: </span></td>
    <td class="STYLE2"><input name="textfield" type="text" size="22">
      <input name="hiddenField" type="hidden" value="��������Ǳ��������һ���ۺ�ʹ��."></td>
    <td width="144" height="22" align="center" bgcolor="#E1FFE9" class="STYLE3"><span class="STYLE5"><?php echo $s1;?></span></td>
  </tr>
  <tr>
    <td align="center"><span class="STYLE2">�ı���:</span></td>
    <td class="STYLE2"><textarea name="textarea" cols="20" rows="3"></textarea></td>
    <td align="center" bgcolor="#E1FFE9" class="STYLE5"><?php echo $s2;?></td>
  </tr>
  <tr>
    <td align="center"><span class="STYLE2">��ѡ��:</span></td>
    <td class="STYLE2"><input type="checkbox" name="checkbox" value="Ӣ��">
Ӣ��
  <input type="checkbox" name="checkbox2" value="����">
����
<input type="checkbox" name="checkbox3" value="��ѧ">
��ѧ</td>
    <td height="22" align="center" bgcolor="#E1FFE9" class="STYLE5"><?php echo $s3;?></td>
  </tr>
  <tr>
    <td align="center"><span class="STYLE2">��ѡ��ť:</span></td>
    <td class="STYLE2"><input type="radio" name="radiobutton" value="ͬ��">
ͬ��
  <input type="radio" name="radiobutton" value="��ͬ��">
��ͬ��</td>
    <td height="22" align="center" bgcolor="#E1FFE9" class="STYLE5"><?php echo $s4;?></td>
  </tr>
  <tr>
    <td align="center"><span class="STYLE2">��ѡ��ť��:</span></td>
    <td width="195" class="STYLE2"><p>
        <label>
        <input type="radio" name="RadioGroup1" value="PHP">
          PHP</label>
        <br>
        <label>
        <input type="radio" name="RadioGroup1" value="ASP">
          ASP</label>
        <br>
        <label>
        <input type="radio" name="RadioGroup1" value="JSP">
          JSP</label>
        <br>
    </p></td>
    <td align="center" bgcolor="#E1FFE9" class="STYLE5"><?php echo $s5;?></td>
  </tr>
  <tr>
    <td align="center"><span class="STYLE2">�б�/�˵�</span></td>
    <td class="STYLE2"><select name="select">
      <option value="����">����</option>
      <option value="Ա��">Ա��</option>
      <option value="�ܾ���">�ܾ���</option>
    </select></td>
    <td height="22" align="center" bgcolor="#E1FFE9" class="STYLE5"><?php echo $s6;?></td>
  </tr>
  <tr>
    <td align="center"><span class="STYLE2">�ļ���:</span></td>
    <td class="STYLE2"><input name="files" type="file" id="files" size="18"></td>
    <td height="22" bgcolor="#E1FFE9" class="STYLE2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="22" colspan="2" class="STYLE2"><input type="submit" name="Submit" value="�ύ">
      &nbsp;&nbsp;<?php echo $s7;?> </td>
    </tr>
</table>
</form></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
