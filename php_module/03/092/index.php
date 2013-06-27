<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>网页拾色器</title>
<link rel="stylesheet" href="Css/style.css">
</head>
<body>
<table width="427" height="475" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="Images/images_01.gif"><table width="427" height="391" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="171">&nbsp;</td>
      </tr>
      <tr>
        <td height="77" align="center">
<span class="pt9">
<script language="javascript">
function colorpick(field){
   var rtn = window.showModalDialog("color.php","","dialogWidth:225px;dialogHeight:170px;status:no;help:no;scrolling=no;scrollbars=no");
   if(rtn!=null)
	document.body.style.background=rtn;
	field.style.background=rtn;
 	return;
   }
</script>
设置页面背景色 
                                <input name="color" type="text" id="color" size="3" readonly="yes" style="background-color:#CCFF00" onClick="colorpick(this);">
</span>		</td>
      </tr>
      <tr>
        <td height="143">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
