<?php session_start();
   if($Submit==true){
       $s1=$_POST[textfield];
       $s2=$_POST[textarea];
       $s3=$_POST[checkbox];
       $s4=$_POST[RadioGroup1];
       $s5=$_POST[select];
       $s6=$_POST[files];
	   $s7=$_POST[hiddenField];
      $path = './upfiles/'. $_FILES['files']['name'];
      if(move_uploaded_file($_FILES['files']['tmp_name'],$path)) { 
	       echo "�ϴ��ɹ�!!";
	       echo "<meta http-equiv=\"Refresh\" content=\"3;url=index2.php?lmbs=�ļ��ϴ�\">"; }
	  else echo "�ļ��ϴ�ʧ��!!";
           echo "<meta http-equiv=\"Refresh\" content=\"3;url=index2.php?lmbs=�ļ��ϴ�\">"; }
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
-->
</style>
</head>

<body>
<form action="index.php" method="post" enctype="multipart/form-data" name="form1">
<table width="450" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" colspan="3" align="center"><span class="STYLE1">�����ۺ�Ӧ��</span></td>
    </tr>
  <tr>
    <td width="97" align="center"><span class="STYLE2">�ı��ֶ�: </span></td>
    <td><input name="textfield" type="text" size="22">
      <input name="hiddenField" type="hidden" value="��������Ǳ��������һ���ۺ�ʹ��."></td>
    <td width="144" height="22"><?php echo $s1;?></td>
  </tr>
  <tr>
    <td align="center"><span class="STYLE2">�ı���:</span></td>
    <td><textarea name="textarea" cols="20" rows="3"></textarea></td>
    <td><?php echo $s2;?></td>
  </tr>
  <tr>
    <td align="center"><span class="STYLE2">��ѡ��:</span></td>
    <td><input type="checkbox" name="checkbox" value="Ӣ��">
Ӣ��
  <input type="checkbox" name="checkbox2" value="����">
����
<input type="checkbox" name="checkbox3" value="��ѧ">
��ѧ</td>
    <td height="22"><?php echo $s3;?></td>
  </tr>
  <tr>
    <td align="center"><span class="STYLE2">��ѡ��ť:</span></td>
    <td><input type="radio" name="radiobutton" value="ͬ��">
ͬ��
  <input type="radio" name="radiobutton" value="��ͬ��">
��ͬ��</td>
    <td height="22"><?php echo $s4;?></td>
  </tr>
  <tr>
    <td align="center"><span class="STYLE2">��ѡ��ť��:</span></td>
    <td width="195"><p>
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
    <td><?php echo $s5;?></td>
  </tr>
  <tr>
    <td align="center"><span class="STYLE2">�б�/�˵�</span></td>
    <td><select name="select">
      <option value="����">����</option>
      <option value="Ա��">Ա��</option>
      <option value="�ܾ���">�ܾ���</option>
    </select></td>
    <td height="22"><?php echo $s6;?></td>
  </tr>
  <tr>
    <td align="center"><span class="STYLE2">�ļ���:</span></td>
    <td><input name="files" type="file" id="files" size="18"></td>
    <td height="22">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="�ύ"></td>
    <td height="22">&nbsp;</td>
  </tr>
</table>
<?php echo $s7;?>
</form>
</body>
</html>
