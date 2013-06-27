<?php  session_start();
if($Submit=="提交"){  
   if (file_exists( $old_name)){   
	    if (rename($old_name,$new_name ))     //把原文件重新命名
       {echo "修改成功!";}   
      }else{ print $old_name."文件不存在!<br>" ;  }     
 }    
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>修改文件名</title>
</head>

<body>
<table width="450" height="180" border="0" cellpadding="0" cellspacing="0" background="images/327.jpg">
 <form action="index.php" method="post" enctype="multipart/form-data" name="form1">
  <tr>
    <td width="166">&nbsp;</td>
    <td width="11" height="55">&nbsp;</td>
    <td width="172">&nbsp;</td>
    <td width="101">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="28">&nbsp;</td>
    <td><input name="new_name" type="text" id="new_name" size="23"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25" colspan="2"><input name="old_name" type="text" id="old_name" size="23"></td>
    <td><input type="submit" name="Submit" value="提交"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;
    </td>
    <td>&nbsp;</td>
  </tr>
  </form>
</table>
</body>
</html>
