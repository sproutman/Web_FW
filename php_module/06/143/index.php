<?php session_start(); include("conn/conn.php");?> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ͨ��mysqli_connect()�����������ݿ�</title>
<style type="text/css">
<!--
.STYLE1 {
	font-family: "��������";
	font-size: 20px;
}
.STYLE2 {font-size: 13px}
-->
</style>
</head>

<body>
<table width="360" border="1" background="images/bg.JPG">
 <form name="form1" method="post" action="index_ok.php">
  <tr>
    <td height="40" colspan="3" align="center"><span class="STYLE1">����Աע��</span></td>
    </tr>
	<?php $query=mysqli_query($id,"select * from tb_mysql");
	       if($query==true){
		   $myrow=mysqli_fetch_array($query); }
	?>
  <tr>
    <td width="82" height="25" align="center"><span class="STYLE2">�û���:</span></td>
    <td width="168"><input name="username" type="text" id="username" value="<?php echo $myrow[username];?>" size="20"></td>
    <td width="88">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" align="center" class="STYLE2">����:</td>
    <td><input name="password" type="text" id="password" value="<?php echo $myrow[password];?>" size="20"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="40" align="center" class="STYLE2">��ַ:</td>
    <td><input name="address" type="text" id="address" value="<?php echo $myrow[address];?>" size="22"></td>
    <td><input type="submit" name="Submit" value="�޸�"></td>
  </tr>
  </form>
</table>


</body>
</html>
