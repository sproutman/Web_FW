<?php 
if($Submit=="提交"){
$textarea=$_POST[textarea];
$select=$_POST[select];}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>获取下拉列表的值</title>
<style type="text/css">
<!--
.style1 {font-size: 14px}
.style2 {font-size: 13px}
-->
</style>
</head>

<body>
<table width="280" border="1" cellpadding="0" cellspacing="0" background="images/aaa.JPG">
<form name="form1" method="post" action="index.php">
  <tr align="center">
    <td height="25" colspan="2"><span class="style1">员工意见箱</span></td>
  </tr>
  <tr>
    <td width="80" height="20" align="center"><span class="style2">意见主题:</span></td>
    <td width="194"><select name="select" size="1">
      <option>公司发展</option>
      <option>公司制度</option>
      <option selected>后勤服务</option>
      <option>员工薪资</option>
    </select></td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="style2">意见内容：</td>
    <td><textarea name="textarea" cols="22" rows="3"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="提交"></td>
  </tr>
  <tr>
    <td colspan="2" class="style2">&nbsp;&nbsp;获取下拉列表的值:<?php echo $select;?></td>
  </tr>
  <tr>
    <td colspan="2" class="style2">&nbsp;&nbsp;意见的内容:<?php echo $textarea;?></td>
  </tr>
  </form>
</table>
</body>
</html>
