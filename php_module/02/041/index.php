<?php session_start(); include("Conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>根据下拉列表的值显示不同控件</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
</style>
</head>
<script>
function lookup(Value)
{
	document.all.textfield.style.display = "";
	document.all.selects.style.display = "none";
	if(Value == "Famous_Id")
	{
		textfield.style.display = "none";
		selects.style.display = "";
	}
	else
	{
		document.all.textfield.style.display = "";
		document.all.selects.style.display = "none";
	}
}
</script>
<body>
<?php if($Submit=="查询"){?>
<table width="300" border="1" cellpadding="0" cellspacing="0" background="images/admin2.gif">
<?php 
$query="select * from tb_userclass where username='$select2' or number='$select3'";
$result=mysql_query($query);
if($result==true){
$myrow=mysql_fetch_array($result);
$userclass=$myrow[userclass];}
?>
  <tr align="center">
    <td height="25" colspan="3"><span class="style1"> 获取查询结果</span></td>
  </tr>
  <tr>
    <td width="58" align="center"><span class="style1">姓名:</span></td>
    <td width="206"><input name="username" type="text" id="username" size="25" value="<?php echo $myrow[username];?>">
      <input type="hidden" name="hiddentextfield" value="<?php echo $myrow[number];?>"></td>
    <td width="45">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><span class="style1">编号:</span></td>
    <td><input name="number" type="text" id="number" size="25" value="<?php echo $myrow[number];?>"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><span class="style1">部门:</span></td>
    <td>
	<select name="userclass" size="1">
	  <option><?php echo $myrow[userclass];?></option>
	<?php 
          $query="select * from tb_userclass where userclass!='$userclass'";
          $result=mysql_query($query);
          if($result==true){
            while($myrows=mysql_fetch_array($result)){
    ?>
	  <option><?php echo $myrows[userclass];?></option>
    <?php }}?>
    </select>
	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><span class="style1">地址:</span></td>
    <td><input name="address" type="text" id="address" size="27" maxlength="80" value="<?php echo $myrow[address];?>"></td>
    <td>&nbsp;</td>
  </tr>
</table>
<?php }?>
<table width="300" border="1" cellpadding="0" cellspacing="00" background="images/sss.JPG">
  <tr align="center">
    <td height="25" colspan="2"><span class="style1">根据下拉列表的值显示不同控件</span></td>
  </tr>
<form name="form1" method="post" action="index.php">
  <tr>
    <td width="142" height="20" align="right" class="style1">查询条件:</td>
    <td width="202">
	<select name="Condition" class="text" onChange="lookup(options[selectedIndex].value)">
        <option value="" selected>无</option>
	  <option value="Famous_Id">姓名</option>
      <option>编号</option>
    </select></td>
  </tr>
  <tr>
    <td height="20" colspan="2" align="center" id="textfield"><span class="style1">调用文本框:</span>      
	<input name="select3" type="text" id="select2" size="20" maxlength="50"></td>
    </tr>
  <tr>
    <td height="20" colspan="2" align="center" id="selects"><span class="style1">调用下拉菜单:</span>      
	<select name="select2">
	<option selected>无</option>
	<?php $query="select * from tb_userclass ";
	$result=mysql_query($query);
	while($myrow=mysql_fetch_array($result)){
	?>		
	<option value="<?php echo $myrow[username]?>"><?php echo $myrow[username];?></option>
      <?php }?>
	  </select></td>
    </tr>
  <tr>
    <td align="right"><input type="submit" name="Submit" value="查询"></td>
    <td height="20"><input type="reset" name="Submit2" value="重置"></td>
  </tr>
  </form>
</table>
</body>
</html>
