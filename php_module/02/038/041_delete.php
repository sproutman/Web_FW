<?php session_start(); include("conn/conn.php");?>
<?php 
if($Submit=="�޸�"){
$query="update tb_userclass set username='$username',number='$number',userclass='$userclass',address='$address' where number='$hiddenField'";
$result=mysql_query($query);
if($result){ echo "<script>alert ('�޸ĳɹ�!'); window.location.href='index.php';</script>";
}else{echo "ʧ��!";}}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�޸�����ʱ�����б��Ĭ��ֵΪ���ݿ���ԭ������Ϣ</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
</style>
</head>

<body>
<table width="310" border="1" cellpadding="0" cellspacing="0" background="images/admin2.gif">
<?php 
$query="select * from tb_userclass where number='$lmbs'";
$result=mysql_query($query);
if($result==true){
$myrow=mysql_fetch_array($result);
$userclass=$myrow[userclass];}
?>
  <tr align="center">
    <td height="25" colspan="3"><span class="style1"> �޸�����ʱ�����б��Ĭ��ֵΪ���ݿ���ԭ������Ϣ </span></td>
  </tr>
  <form name="form1" method="post" action="041_delete.php">
  <tr>
    <td width="58" align="center"><span class="style1">����:</span></td>
    <td width="206"><input name="username" type="text" id="username" size="25" value="<?php echo $myrow[username];?>">
      <input type="hidden" name="hiddenField" value="<?php echo $myrow[number];?>"></td>
    <td width="45">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><span class="style1">���:</span></td>
    <td><input name="number" type="text" id="number" size="25" value="<?php echo $myrow[number];?>"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><span class="style1">����:</span></td>
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
    <td align="center"><span class="style1">��ַ:</span></td>
    <td><input name="address" type="text" id="address" size="27" maxlength="80" value="<?php echo $myrow[address];?>"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="�޸�">
    <input type="reset" name="Submit2" value="����"></td>
    <td>&nbsp;</td>
  </tr>
  </form>
</table>


</body>
</html>
