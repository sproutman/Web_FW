<?php session_start(); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="css/style.css" rel="stylesheet">
<title>����Sky</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
</head>
<script src="js/code.js"></script>
<script language="javascript">
function check(){
	if(myform.txt_title.value==""){
		alert("�����������Ʋ�����Ϊ�գ�");myform.txt_title.focus();return false;
	}
	if(myform.file.value==""){
		alert("�������ݲ�����Ϊ�գ�");myform.file.focus();return false;
	}
	myform.submit();
}
</script>
<body >
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
              <TD height="34" align="center" valign="middle">			  <TABLE width="237"  align="center" cellPadding=0 cellSpacing=0>
                <TBODY>
                  <TR align="center" valign="middle">
                    <TD width="121" height="24"  style="COLOR: red;"><img src="images/fig_02.gif" width="22" height="16">&nbsp;&nbsp;<a href="index.php">��������</a></TD>
                    <TD width="114"  style=" COLOR: red;"><img src="images/fig_02.gif" width="22" height="16">&nbsp;<a href="query.php">��ѯ����</a></TD>
                  </TR>
                </TBODY>
              </TABLE></TD> 
            </TR> 
          </TBODY> 
        </TABLE></TD> 
    </TR> 
    <TR> 
	<td height="17" background="images/top.jpg">&nbsp;
	</td>
    </TR>
    <TR>
      <td height="116" align="center" background="images/center.jpg"><table width="500" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td>
            <form  name="myform" method="post" action="check_file.php">
              <table width="630" border="1" cellpadding="3" cellspacing="1" bordercolor="#D6E7A5">
                <tr>
                  <td class="i_table" colspan="4"><img src="images/fig_03.gif" width="18" height="22"> <span class="tableBorder_LTR">��Ӳ�������</span></td>
                </tr>
                <tr>
                  <td valign="top" align="right" width="16%">�������⣺<br></td>
                  <td width="40%"><input name="txt_title" type="text" id="txt_title2" size="35"></td>
                  <td width="15%" align="center">���ߣ�</td>
                  <td width="29%"><input name="author" type="text" id="txt_title" size="15"></td>
                </tr>
                <tr>
                  <td align="right" width="16%">���ֱ������</td>
                  <td colspan="3"><img src="images/UBB/B.gif" width="21" height="20" onClick="bold()">&nbsp;<img src="images/UBB/I.gif" width="21" height="20" onClick="italicize()">&nbsp;<img src="images/UBB/U.gif" width="21" height="20" onClick="underline()"> ����
                      <select name="font" class="wenbenkuang" id="font" onChange="showfont(this.options[this.selectedIndex].value)">
                        <option value="����" selected>����</option>
                        <option value="����">����</option>
                        <option value="����">����</option>
                        <option value="����">����</option>
                      </select>
              �ֺ�<span class="pt9">
              <select 
      name=size class="wenbenkuang" onChange="showsize(this.options[this.selectedIndex].value)">
                <option value=1>1</option>
                <option value=2>2</option>
                <option 
        value=3 selected>3</option>
                <option value=4>4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
              </select>
              ��ɫ
              <select onChange="showcolor(this.options[this.selectedIndex].value)" name="color" size="1" class="wenbenkuang" id="select">
                <option selected>Ĭ����ɫ</option>
                <option style="color:#FF0000" value="#FF0000">��ɫ����</option>
                <option style="color:#0000FF" value="#0000ff">��ɫ����</option>
                <option style="color:#ff00ff" value="#ff00ff">��ɫ����</option>
                <option style="color:#009900" value="#009900">��ɫ�ഺ</option>
                <option style="color:#009999" value="#009999">��ɫ��ˬ</option>
                <option style="color:#990099" value="#990099">��ɫ�н�</option>
                <option style="color:#990000" value="#990000">��ҹ�˷�</option>
                <option style="color:#000099" value="#000099">��������</option>
                <option style="color:#999900" value="#999900">�����Ʒ�</option>
                <option style="color:#ff9900" value="#ff9900">�ֽ�����</option>
                <option style="color:#0099ff" value="#0099ff">��������</option>
                <option style="color:#9900ff" value="#9900ff">��������</option>
                <option style="color:#ff0099" value="#ff0099">���İ�ʾ</option>
                <option style="color:#006600" value="#006600">ī�����</option>
                <option style="color:#999999" value="#999999">��������</option>
              </select>
            </span></td>
                </tr>
                <tr>
                  <td align="right" width="16%">�������ݣ�</td>
                  <td colspan="3">
                    <div class="file">
                      <textarea name="file" cols="65" rows="10" id="file" style="border:0px;width:520px;"></textarea>
                  </div></td>
                </tr>
                <tr align="center">
                  <td colspan="4"><input name="btn_tj" type="submit" id="btn_tj" value="�ύ" onClick="return check();">
&nbsp;
              <input name="btn_cx" type="reset" id="btn_cx" value="��д"></td>
                </tr>
              </table>
          </form></td>
        </tr>
      </table></td>
    </TR>
    <TR>
      <td height="34" background="images/bottom.jpg">&nbsp;</td>
    </TR> 
    <TR> 
      <TD height="82" colSpan=3 align="center" background="images/footer.jpg"> ��ӭ���ʲ�����
        ��ʹ��IE
        6.0
        ��1024��768�ֱ������������վ<BR> 
        CopyRight@
        2006
        ���տƼ�����</TD> 
    </TR> 
  </TBODY> 
</TABLE> 
</body>
</html>
