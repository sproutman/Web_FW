<?php session_start();
if($Submit=="����"){
$file_up=$_POST[files];
if(file_exists($file_up)){
echo "�ļ��Ѿ�����!!";
}else{echo "���ļ�������!!";}
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ж��ļ��Ƿ����</title>
</head>

<body>
<table width="350" height="150" border="0" cellpadding="0" cellspacing="0" background="images/328.jpg">
 <form name="form1" method="post" action="index.php" enctype="multipart/form-data">
  <tr>
    <td width="105" height="75">&nbsp;</td>
    <td width="155">&nbsp;</td>
    <td width="90">&nbsp;</td>
  </tr>
  <tr>
    <td height="75">&nbsp;</td>
    <td><input name="files" type="text" id="files" size="20"></td>
    <td><input type="submit" name="Submit" value="����"></td>
  </tr>
  </form>
</table>
</body>
</html>
