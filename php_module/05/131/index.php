<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>使用Switch语句实现站内导航</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body>
<table width="834" height="93" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/top.jpg" width="834" height="93"></td>
  </tr>
</table>
<table width="834" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="189"><img src="images/top1.jpg" width="189" height="33"></td>
    <td width="116"><img src="images/top2.jpg" width="116" height="33"></td>
    <td background="images/top3.jpg">&nbsp;</td>
  </tr>
</table>
<table width="834" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="189" height="258" align="left" valign="top" background="images/left.jpg">
	 <table width="185" border="0" align="center">
      <tr>
        <td align="center"><a href="index.php?$lmbs=公司产品"><img src="images/gscp.gif" width="125" height="30" border="0" align="middle"></a></td>
      </tr>
      <tr>
        <td align="center"><a href="index.php?$lmbs=企业管理"><img src="images/qygl.gif" width="125" height="30" border="0"></a></td>
      </tr>
      <tr>
        <td align="center"><a href="index.php?$lmbs=下载专区"><img src="images/xzzq.gif" width="125" height="30" border="0"></a></td>
      </tr>
      <tr>
        <td align="center"><a href="index.php?$lmbs=业务管理"><img src="images/ywgl.gif" width="125" height="30" border="0"></a></td>
      </tr>
      <tr>
        <td align="center"><a href="index.php?$lmbs=意见箱"><img src="images/yjx1.gif" width="125" height="30" border="0"></a></td>
      </tr>
      <tr>
        <td align="center"><a href="index.php?$lmbs=资源管理"><img src="images/zygl.gif" width="125" height="30" border="0"></a></td>
      </tr>
      <tr>
        <td align="center"><a href="index.php?$lmbs=公告栏"><img src="images/ggl1.gif" width="125" height="30" border="0"></a></td>
      </tr>
    </table></td>
    <td width="645" align="left" valign="top"><table width="645" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3"><img src="images/22.png" width="645" height="30"></td>
        </tr>
      <tr>
        <td width="32" background="images/middle3.jpg">&nbsp;</td>
        <td width="581" align="center" valign="top"> <?php switch($lmbs){
	case "":
	    include "134.php";
	break;
	case "企业管理":
	    include "#";
		break;
	case "下载专区":
	    include "#";
	break;
	case "业务管理":
	    include "#";
		break;
	case "意见箱":
	    include "#";
	break;
	case "资源管理":
	    include "#";
		break;
	case "公告栏":
	    include "#";
	break;
	 }?></td>
        <td width="32" background="images/middle4.jpg">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><img src="images/23.png" width="645" height="42"></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2"><img src="images/bottom.JPG" width="834" height="36"></td>
  </tr>
</table>
</body>
</html>
