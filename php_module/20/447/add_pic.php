<?php session_start(); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="css/style.css" rel="stylesheet">
<title>���ͼƬ</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
</head>
<body>
<TABLE width="757" cellPadding=0 cellSpacing=0 style="WIDTH: 755px" align="center"> 
  <TBODY> 
    <TR> <TD style="VERTICAL-ALIGN: bottom; HEIGHT: 6px" colSpan=3> <TABLE 
      style="BACKGROUND-IMAGE: url(images/f_head.jpg); WIDTH: 760px; HEIGHT: 154px" 
      cellSpacing=0 cellPadding=0> <TBODY> 
            <TR> 
              <TD height="110" colspan="6" 
          style="VERTICAL-ALIGN: text-top; WIDTH: 80px; HEIGHT: 115px; TEXT-ALIGN: right"></TD> 
            </TR> 
            <TR> 
              <TD height="29" align="center" valign="middle">			  <TABLE width="300" align="center" cellPadding=0 cellSpacing=0 style="WIDTH: 300px" VERTICAL-ALIGN: text-top;>
                <TBODY>
                  <TR align="center" valign="middle">
                    <TD width="127" height="21" style="WIDTH: 80px; COLOR: red;"><img src="images/fig_02.gif" width="22" height="16">&nbsp;&nbsp;<a href="add_pic.php">���ͼƬ</a></TD>
                    <TD width="241" style="WIDTH: 80px; COLOR: red;"><img src="images/fig_02.gif" width="22" height="16">&nbsp;<a href="browse_pic.php">&nbsp;���ͼƬ</a></TD>
                    <TD width="210" style="WIDTH: 90px; COLOR: red;"><img src="images/fig_02.gif" width="22" height="16"> <a href="query_pic.php" class='navlink' style="CURSOR:hand"  onMouseOver=showmenu(event,myfriend) onMouseOut=delayhidemenu() >&nbsp;&nbsp;��ѯͼƬ</a></TD>
                  </TR>
                </TBODY>
              </TABLE></TD> 
            </TR> 
          </TBODY> 
        </TABLE></TD> 
    </TR> 
    <TR> 
      <td height="8" background="images/top.jpg" >&nbsp;</td>
    </TR>
    <TR>
      <td height="160" align="center" background="images/center.jpg" ><table width="380" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td>
            <form  name="myform" method="post" action="tptj_ok.php"  enctype="multipart/form-data">
              <table width="450" border="1" cellpadding="3" cellspacing="1" bordercolor="#D6E7A5">
                <tr>
                  <td class="i_table" colspan="2"><span class="right_head"><SPAN  style="FONT-SIZE: 9pt; COLOR: #cc0033"><img src="images/fig_03.gif" width="18" height="22"></SPAN></span> <span class="tableBorder_LTR">���ͼƬ</span></td>
                </tr>
                <tr>
                  <td valign="top" align="right" width="28%">ͼƬ���ƣ�<br></td>
                  <td width="72%"><input name="tpmc" type="text" id="tpmc2" size="40"></td>
                </tr>
                <tr>
                  <td align="right" width="28%">�ϴ�·����</td>
                  <td width="72%"><input name="file" type="file" size="23" maxlength="60" >
                  </td>
                </tr>
                <tr align="center">
                  <td colspan="2"><input name="btn_tj" type="submit" id="btn_tj" value="�ύ">
&nbsp;
              <input name="btn_cx" type="reset" id="btn_cx" value="��д"></td>
                </tr>
              </table>
          </form></td>
        </tr>
      </table></td>
    </TR>
    <TR>
      <td height="16" background="images/bottom.jpg" >&nbsp;</td>
    </TR> 
    <TR> 
      <TD height="82" colSpan=3 align="center" background="images/footer.jpg"> ��ӭ���ʲ�����
        ��ʹ��IE
        6.0
        ��1024��768�ֱ������������վ<BR> 
        CopyRight@
        2007
        ���տƼ�����</TD> 
    </TR> 
  </TBODY> 
</TABLE> 
</body>
</html>
