<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link rel="stylesheet" type="text/css" href="style.css"> 
<title>mp3在线点播</title>
<style type="text/css">
<!--
.STYLE2 {color: #FFFFFF; font-weight: bold; }
-->
</style>
</head>

<body>
<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="81" bgcolor="#0099CC"><table width="350" height="100" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="206" height="20" bgcolor="#0099CC"><div align="center" class="STYLE2">歌曲名</div></td>
        <td width="70" bgcolor="#0099CC"><div align="center" class="STYLE2">试听</div></td>
        <td width="70" bgcolor="#0099CC"><div align="center" class="STYLE2">下载</div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF">挪威的森林</td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><a href="index.php?id=mp3/music.mp3">试听</a></div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><a href="download.php?id=mp3/music.mp3"><img src="images/download.GIF" width="22" height="22" border="0"/></a></div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF">朋友</td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><a href="index.php?id=mp3/music.mp3">试听</a></div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><a href="download.php?id=mp3/music.mp3"><img src="images/download.GIF" width="22" height="22" border="0"/></a></div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF">祝福</td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><a href="index.php?id=mp3/music.mp3">试听</a></div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><a href="download.php?id=mp3/music.mp3"><img src="images/download.GIF" width="22" height="22" border="0"/></a></div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF">作日重现</td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><a href="index.php?id=mp3/music.mp3">试听</a></div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><a href="download.php?id=mp3/music.mp3"><img src="images/download.GIF" width="22" height="22" border="0"/></a></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<br>
<?php
if($_GET[id]!="")
 {
?>
<div align=center>
<object classid="clsid:22D6F312-B0F6-11D0-94AB-0080C74C7E95" height="68" id="MediaPlayer1" width="460">
  <param name="AutoStart" value="-1">
  <param name="ShowStatusBar" value="-1">
  <param name="Filename" value="<?php echo $_GET[id]?>">
</object>
</div>
<?php
}
?>
</body>
</html>
