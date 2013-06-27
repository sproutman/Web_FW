<?php session_start(); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="css/style.css" rel="stylesheet">
<title>博客Sky</title>
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
		alert("博客主题名称不允许为空！");myform.txt_title.focus();return false;
	}
	if(myform.file.value==""){
		alert("文章内容不允许为空！");myform.file.focus();return false;
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
                    <TD width="121" height="24"  style="COLOR: red;"><img src="images/fig_02.gif" width="22" height="16">&nbsp;&nbsp;<a href="index.php">发表文章</a></TD>
                    <TD width="114"  style=" COLOR: red;"><img src="images/fig_02.gif" width="22" height="16">&nbsp;<a href="query.php">查询文章</a></TD>
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
                  <td class="i_table" colspan="4"><img src="images/fig_03.gif" width="18" height="22"> <span class="tableBorder_LTR">添加博客文章</span></td>
                </tr>
                <tr>
                  <td valign="top" align="right" width="16%">博客主题：<br></td>
                  <td width="40%"><input name="txt_title" type="text" id="txt_title2" size="35"></td>
                  <td width="15%" align="center">作者：</td>
                  <td width="29%"><input name="author" type="text" id="txt_title" size="15"></td>
                </tr>
                <tr>
                  <td align="right" width="16%">文字编程区：</td>
                  <td colspan="3"><img src="images/UBB/B.gif" width="21" height="20" onClick="bold()">&nbsp;<img src="images/UBB/I.gif" width="21" height="20" onClick="italicize()">&nbsp;<img src="images/UBB/U.gif" width="21" height="20" onClick="underline()"> 字体
                      <select name="font" class="wenbenkuang" id="font" onChange="showfont(this.options[this.selectedIndex].value)">
                        <option value="宋体" selected>宋体</option>
                        <option value="黑体">黑体</option>
                        <option value="隶书">隶书</option>
                        <option value="楷体">楷体</option>
                      </select>
              字号<span class="pt9">
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
              颜色
              <select onChange="showcolor(this.options[this.selectedIndex].value)" name="color" size="1" class="wenbenkuang" id="select">
                <option selected>默认颜色</option>
                <option style="color:#FF0000" value="#FF0000">红色热情</option>
                <option style="color:#0000FF" value="#0000ff">蓝色开朗</option>
                <option style="color:#ff00ff" value="#ff00ff">桃色浪漫</option>
                <option style="color:#009900" value="#009900">绿色青春</option>
                <option style="color:#009999" value="#009999">青色清爽</option>
                <option style="color:#990099" value="#990099">紫色拘谨</option>
                <option style="color:#990000" value="#990000">暗夜兴奋</option>
                <option style="color:#000099" value="#000099">深蓝忧郁</option>
                <option style="color:#999900" value="#999900">卡其制服</option>
                <option style="color:#ff9900" value="#ff9900">镏金岁月</option>
                <option style="color:#0099ff" value="#0099ff">湖波荡漾</option>
                <option style="color:#9900ff" value="#9900ff">发亮蓝紫</option>
                <option style="color:#ff0099" value="#ff0099">爱的暗示</option>
                <option style="color:#006600" value="#006600">墨绿深沉</option>
                <option style="color:#999999" value="#999999">烟雨蒙蒙</option>
              </select>
            </span></td>
                </tr>
                <tr>
                  <td align="right" width="16%">文章内容：</td>
                  <td colspan="3">
                    <div class="file">
                      <textarea name="file" cols="65" rows="10" id="file" style="border:0px;width:520px;"></textarea>
                  </div></td>
                </tr>
                <tr align="center">
                  <td colspan="4"><input name="btn_tj" type="submit" id="btn_tj" value="提交" onClick="return check();">
&nbsp;
              <input name="btn_cx" type="reset" id="btn_cx" value="重写"></td>
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
      <TD height="82" colSpan=3 align="center" background="images/footer.jpg"> 欢迎访问博客网
        请使用IE
        6.0
        在1024×768分辨率下浏览本网站<BR> 
        CopyRight@
        2006
        明日科技开发</TD> 
    </TR> 
  </TBODY> 
</TABLE> 
</body>
</html>
