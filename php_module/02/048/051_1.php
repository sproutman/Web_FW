<?php session_start();?>
<?php
function unhtml($content)
 {
    $content=htmlspecialchars($content);
    $content=str_replace(chr(13),"<br>",$content);
    $content=str_replace(chr(32),"&nbsp;",$content);
   return trim($content);
 }
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>获取表单中提交的所有数据</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
</style>
</head>

<body>
<table width="350" border="1" cellpadding="0" cellspacing="0" background="images/bg.gif">
    <tr>
      <td height="23" colspan="2" align="center"><span class="style1">获取表单中提交的所有数据</span></td>
    </tr>
    <tr class="style1">
      <td width="101" align="right">经验技巧:</td>
      <td width="243"><?php echo $_POST[username];?></td>
    </tr>
    <tr align="center">
      <td colspan="2" class="style1">源代码</td>
    </tr>
    <tr align="left">
      <td colspan="2" class="style1">&nbsp;<?php echo unhtml($_POST[test]);?></td>
  </tr>
</table>
</body>
</html>
