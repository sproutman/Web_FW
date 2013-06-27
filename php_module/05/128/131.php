<?php 
$include="这是被调用的文件内容!!";
function includes(){
echo "一览众山晓!!";
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>inlcude_once()函数的应用</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
</style>
</head>

<body>
<table width="300" height="225" border="0" align="center" cellpadding="1" cellspacing="1" background="images/5.7.JPG">
  <tr>
    <td class="style1"><span class="style1">&nbsp;&nbsp;<?php echo includes();?></span></td>
  </tr>
</table>
</body>
</html>
