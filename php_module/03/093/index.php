<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>日期选择器</title>
<style type="text/css">
<!--
td {font-size:9pt;}
-->
</style>
</head>
<script language="javascript">
function open_day_from()
 {
   var day;
   day=window.showModalDialog('day.php','','dialogWidth=300px;dialogHeight=50px; scrollbars=no;status=no');
   if(day==undefined)
    {
	 day="";
	}
   document.form1.timefrom.value=day;
 }
 
 function open_day_to()
 {
   var day;
   day=window.showModalDialog('day.php','','dialogWidth=300px;dialogHeight=50px; scrollbars=no;status=no');
    if(day==undefined)
    {
	 day="";
	}
   document.form1.timeto.value=day;
 }
</script>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="777" height="491" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="bottom" background="images/bg.JPG"><table width="777" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="74" height="137">&nbsp;</td>
        <td width="634"><table width="578" border="0" align="center" cellpadding="0" cellspacing="1">
          <form name="form1">
            <tr>
              <td width="79" height="25" bgcolor="#FFFFFF"><div align="center">售货日期：</div></td>
              <td width="53" height="25" bgcolor="#FFFFFF"><div align="center">从</div></td>
              <td width="154" bgcolor="#FFFFFF">
                <table width="150" height="20" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="112"><input type="text" name="timefrom" size="18" class="inputcss" /></td>
                    <td width="38">&nbsp;<img src="images/date.gif" width="20" height="20" onClick="open_day_from()"/></td>
                  </tr>
              </table></td>
              <td width="50" bgcolor="#FFFFFF"><div align="center">到</div></td>
              <td width="236" bgcolor="#FFFFFF"><table width="234" height="20" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="126"><input type="text" name="timeto" size="18" class="inputcss" /></td>
                    <td width="108">&nbsp;<img src="images/date.gif" width="20" height="20" onClick="open_day_to()" />
                      <input name="submit" type="submit" class="buttoncss" value="查询"></td>
                  </tr>
                </table>
                  </td>
            </tr>
          </form>
        </table></td>
        <td width="69">&nbsp;</td>
      </tr>
      <tr>
        <td height="129">&nbsp;</td>
        <td valign="bottom">&nbsp;&nbsp;&nbsp;&nbsp;          </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="29">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
