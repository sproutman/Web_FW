<?php session_start();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>弹出提示对话框并重定向网页</title>
<style>
td{font-size:9pt;}
</style>
</head>
<body>
<table width="760" border="2" align="center" cellpadding="4" cellspacing="2" bordercolor="#8EDEFA">
  <tr>
    <td width="760">
      <table width="760" height="465" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr>
          <td height="126" align="center"><img src="images/bg_top.gif" width="761" height="126"></td>
        </tr>
        <tr>
          <td height="326" valign="top">
            <table width="100%" height="164" border="0" cellpadding="0" cellspacing="0" class="tableBorder_LRB">
              <tr>
                <td height="49" colspan="6" background="images/reply_navigate.gif">&nbsp;</td>
              </tr>
              <tr>
                <td width="5%" height="143">&nbsp;</td>
                <td colspan="4" align="center" valign="top">
                  <form name="form1" method="post" action="mrsoft.php">
                    <table width="100%" height="276" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="16%" height="36" align="center">留言人：</td>
                        <td width="84%">
                          <input name="author" type="text" id="author" size="30" title="留言人"></td>
                      </tr>
                      <tr>
                        <td height="38" align="center">Email：</td>
                        <td><input name="email" type="text" id="email" size="72" title="Email地址">
                          * </td>
                      </tr>
                      <tr>
                        <td height="160" align="center">留言内容：</td>
                        <td><textarea name="content" cols="70" rows="10" class="wenbenkuang" title="留言内容" id="content"></textarea></td>
                      </tr>
                      <tr>
                        <td height="42" colspan="2" align="center"><input name="Submit" type="button" class="btn_grey" value="保存">
&nbsp;&nbsp;
                          <input name="Submit2" type="reset" class="btn_grey" value="重置">
&nbsp;&nbsp;</td>
                      </tr>
                    </table>
                </form></td>
                <td width="6%">&nbsp;</td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td height="13" align="center" class="tableBorder_LR">&nbsp;</td>
        </tr>
  </table>    </tr>
</table>
</body>
</html>
