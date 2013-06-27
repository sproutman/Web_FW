<?php session_start();
if($Submit=="提交"){
$copy=$_POST[copys];
$copys2=$_POST[copy2];
if(copy($copy,$copys2)==true){echo "复制成功!!";}else{echo "失败!!";};
}
if($Submit2=="提交"){
$moves=$_POST[moves];
$moves2=$_POST[moves2];
if(rename($moves,$moves2)==true){echo "移动成功!!";}else{echo "失败!!";};
}

if($Submit3=="提交"){
$delete=$_POST[delete];
if(unlink($delete)==true){echo "删除成功!!";}else{echo "失败!!";};
}
if($Submit4=="提交"){
$fopens=$_POST[fopens];
if(fopen($fopens,"w")==true){echo "创建成功!!";}else{echo "失败!!";};
}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>创建、复制、移动、删除文件</title>
<style type="text/css">
<!--
body {
	margin-left: 00px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>
<body>
<table width="350" border="1" cellpadding="0" cellspacing="0">
<tr>
    <td><table width="350" height="80" border="0" cellpadding="0" cellspacing="0" background="images/326ssss.gif">
      <form name="form1" method="post" action="index.php">
        <tr>
          <td width="95" height="39">&nbsp;</td>
          <td width="171" rowspan="2" align="left" valign="middle">          <input name="fopens" type="text" id="copy2" size="22"></td>
          <td width="84" rowspan="2" valign="middle"><input name="Submit4" type="submit" id="Submit4" value="提交"></td>
        </tr>
        <tr>
          <td height="41">&nbsp;</td>
          </tr>
      </form>
    </table></td>
  </tr>
  <tr>
    <td><table width="350" height="80" border="0" cellpadding="0" cellspacing="0" background="images/326s.gif">
      <form name="form1" method="post" action="index.php">
        <tr>
          <td width="111" height="39">&nbsp;</td>
          <td width="155" valign="bottom"><input name="copys" type="text" id="copys2" size="20">
          </td>
          <td width="84" rowspan="2" valign="middle"><input type="submit" name="Submit" value="提交"></td>
        </tr>
        <tr>
          <td height="41">&nbsp;</td>
          <td valign="top"><input name="copy2" type="text" id="copy22" size="20"></td>
        </tr>
      </form>
    </table></td>
  </tr>
  <tr>
    <td><table width="350" height="80" border="0" cellpadding="0" cellspacing="0" background="images/326ss.gif">
      <form name="form1" method="post" action="index.php">
        <tr>
          <td width="111" height="39">&nbsp;</td>
          <td width="115" valign="bottom"><input name="moves" type="text" id="moves3" size="20">
          </td>
          <td width="84" rowspan="2"><input type="submit" name="Submit2" value="提交"></td>
        </tr>
        <tr>
          <td height="41">&nbsp;</td>
          <td valign="top"><input name="moves2" type="text" id="moves22" size="20"></td>
        </tr>
      </form>
    </table></td>
  </tr>
  <tr>
    <td><table width="350" height="80" border="0" cellpadding="0" cellspacing="0" background="images/326sss.gif">
      <form name="form1" method="post" action="index.php">
        <tr>
          <td width="104">&nbsp;</td>
          <td width="236"><input name="delete" type="text" id="delete2">
              <input type="submit" name="Submit3" value="提交"></td>
        </tr>
      </form>
    </table></td>
  </tr>
</table>
</body>
</html>
