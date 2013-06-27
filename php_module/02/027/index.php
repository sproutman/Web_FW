<?php include("Conn/conn.php");
if($Submit=="提交"){
$textarea=$_POST[textarea];
$RadioGroup=$_POST[RadioGroup];
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>获取单选按钮组的值</title>
<style type="text/css">
<!--
.style1 {font-size: 14px}
.style2 {font-size: 13px}
-->
</style>
</head>

<body>
<table width="325" border="1" cellpadding="0" cellspacing="2" bordercolor="#8CC6FF" background="images/ddd.JPG">
  <form name="form1" method="post" action="index.php" enctype="multipart/form-data">
  <tr align="center">
    <td height="25" colspan="2"><span class="style1">获取单选按钮组的值</span></td>
    </tr>
  <tr>
    <td width="100" align="center"><span class="style2">发布帖子:</span></td>
    <td width="345" align="center"><textarea name="textarea" cols="20" rows="3" wrap="VIRTUAL"></textarea></td>
  </tr>
  <tr>
    <td height="53" align="center" class="style2">表情:</td>
	
    <td align="center" valign="middle">
      <?php $query="select * from tb_radio";
	         $result=mysql_query($query);
	         while(@$myrow=mysql_fetch_array($result)){
	  ?>
      <label><input type="radio" name="RadioGroup" value="<?php echo $myrow[pic];?>">
      <img src="<?php echo $myrow[pic];?>" width="19" height="19"></label>
      <?php }?>
     </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="提交"></td>
  </tr>
  <tr>
    <td align="center" class="style2">表情图</td>
    <td width="215" height="25" align="center" class="style2">帖子的内容</td>
  </tr>
  <tr>
    <td height="25" align="center"><img src="<?php echo $RadioGroup;?>" width="19" height="19"></td>
    <td align="center" class="style2"><?php echo $textarea;?></td>
  </tr>
  </form>
</table>

</body>
</html>
