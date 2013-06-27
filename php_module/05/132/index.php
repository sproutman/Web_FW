<?php  if (isset ($_GET['corporation'])){        
         setcookie ("example_corporation",$_GET['corporation']) ;  //获取当前的值
		 echo "当前选择的企业:<b>{$_GET['corporation']}</b><br/>" ; 
              }else{ echo "您没有选择任何企业.请挑选一家企业.<br/>" ;  }  
       if (isset ($_COOKIE["example_corporation"])){ 
	     echo "COOKIE中保存的值: <b>{$_COOKIE['example_corporation']}</b><br/>";
   	    } ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>表单提交与COOKIE</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
</style>
</head>
<body>
<table width="300" border="1" cellpadding="0" cellspacing="3" bordercolor="#B0FFFF" background="images/135.JPG">
<form action="<?php echo $_SERVER['../PHP_SELF']?>" method="get">
  <tr align="center">
    <td height="22" colspan="4" class="style1">通过COOKIE保存表单提交的值</td>
  </tr>
  <tr align="left">
    <td height="22" colspan="4" class="style1">&nbsp;<?php echo "当前选择的企业:<b>{$_GET['corporation']}</b><br/>" ; ?></td>
  </tr>
  <tr align="left">
    <td height="22" colspan="4" class="style1">&nbsp;<?php echo "COOKIE中保存的值: <b>{$_COOKIE['example_corporation']}</b><br/>"; ?></td>
    </tr>
  <tr align="center">
    <td width="48" align="right">
      <input type="radio" name="corporation" value="明日科技"/>    </td>
    <td width="103" height="22" align="left"><span class="style1">明日科技</span></td>
    <td width="38" align="right">
      <input type="radio" name="corporation" value="钱塘水业"/>   </td>
    <td width="101" align="left" class="style1">钱塘水业</td>
  </tr>
  <tr align="center">
    <td align="right">
      <input type="radio" name="corporation" value="锦江电器 "/>    </td>
    <td height="22" align="left" class="style1">锦江电器</td>
    <td align="right">
      <input type="radio" name="corporation" value="明日报业"/>    </td>
    <td align="left" class="style1">明日报业</td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td height="22" align="right"><input name="submit" type="submit" value="提交"/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  </form>
</table>                      
</body>
</html>
