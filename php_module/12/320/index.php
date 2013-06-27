<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>从文本文件中读取注册服务条款</title>
<style type="text/css">
<!--
.style1 {font-size: 14px}
.style2 {font-size: 13px}
-->
</style>
</head>
<body>
<table width="450" height="256" border="0" cellpadding="0" cellspacing="0" background="images/329.jpg">
  <tr>
    <td height="36" align="center" valign="middle"><span class="style1">从文本文件中读取注册服务条款</span></td>
  </tr>
  <tr>
    <td height="180" align="center" valign="middle"><span class="style2">
    <textarea name="textarea" cols="50" rows="8"> 
	<?php if(file_exists("files/pkh.txt")){
              readfile("files/pkh.txt");
			  }else{echo "该文件不存在!!";}
?>
      </textarea>
</span></td>
  </tr>
  <tr>
    <td height="10" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td height="20" align="center"><input type="submit" name="Submit" value="同意">&nbsp;&nbsp;
    <input type="submit" name="Submit2" value="不同意"></td>
  </tr>
  <tr>
    <td height="10">&nbsp;</td>
  </tr>
</table>
</body>
</html>
