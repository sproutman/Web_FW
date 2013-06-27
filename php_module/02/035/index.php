<?php include("conn/conn.php");
if($Submit==true){
echo $textfield=$_POST[textfield];
echo $textfield2=$_POST[textfield2];
echo $textfield3=$_POST[textfield3];
echo $textfield4=$_POST[textfield4];
echo $select=$_POST[select];
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>在下拉菜单中显示数据表某列的字段值</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
</style>
</head>

<body>
<table width="320" border="1" cellpadding="0" cellspacing="0" background="images/ggg.JPG">
<form name="form1" method="post" action="index.php">
  <tr align="center">
    <td height="25" colspan="2"><span class="style1">员工个人信息录入</span></td>
  </tr>
  <tr>
    <td width="94" height="25" align="center" class="style1">姓名:</td>
    <td width="220"><input name="textfield" type="text" size="20"></td>
  </tr>
  <tr>
    <td height="25" align="center" class="style1">员工编号:</td>
    <td><input name="textfield2" type="text" size="20"></td>
  </tr>
  <tr>
    <td height="25" align="center" class="style1">所属部门:</td>
    <td><select name="select" size="1">
     <?php $query="select * from tb_userclass";
	 $result=mysql_query($query);
	 if($result==true){
	 while($myrow=mysql_fetch_array($result)){
	 ?>
	  <option><?php echo $myrow[userclass];?> </option>
	  <?php }}?>
    </select></td>
  </tr>
  <tr>
    <td height="25" align="center" class="style1">电话:</td>
    <td><input name="textfield3" type="text" size="20"></td>
  </tr>
  <tr>
    <td height="25" align="center" class="style1">毕业院校:</td>
    <td><input name="textfield4" type="text" size="20"></td>
  </tr>
  <tr>
    <td height="25" align="center">&nbsp;</td>
    <td><input type="submit" name="Submit" value="提交">
    <input type="reset" name="Submit2" value="重置"></td>
  </tr>
  </form>
</table>
</body>
</html>
