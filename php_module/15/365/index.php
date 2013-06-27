<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>在PHP中调用Word自动打印指定格式的会议记录</title>
</head>
<body>
<?php
//获取模板文档所在的路径					
$path="http://".$HTTP_HOST.dirname($PHP_SELF)."/meetingDot.doc";
?>
<form name="form1" method="post" action="">
  <table width="609" height="441" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td valign="top" background="images/images_01.gif"><table width="609" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="22" height="105">&nbsp;</td>
          <td width="560">&nbsp;</td>
          <td width="27">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><table width="550" height="288" border="0" align="center" cellspacing="0" >
            <tr >
              <td width="84" height="32" align="right">会议标题：</td>
              <td width="462" colspan="2" align="left" ><input name="title" type="text" id="title4" value="2006年终工作总结报告" size="50"></td>
            </tr>
            <tr >
              <td height="31" align="right">会议时间：</td>
              <td colspan="2" align="left" ><input name="meetingTime" type="text" id="meetingTime" value="2006年12月31日"></td>
            </tr>
            <tr >
              <td height="34" align="right" >主
                持 人：</td>
              <td colspan="2" align="left" ><input name="compere" type="text" id="compere" value="赛经理"></td>
            </tr>
            <tr >
              <td height="39" align="right" >出席人员：</td>
              <td colspan="2" align="left" ><input name="attend" type="text" id="attend" value="全体员工" size="58"></td>
            </tr>
            <tr >
              <td height="99" align="right" >会议内容：</td>
              <td colspan="2" align="left" ><textarea name="content" cols="56" rows="6" class="wenbenkuang" id="content">    回顾2006，展望2007！要求明日员工在新的一年里个人的综合素质有一个全面的提高，提高自身的学识，积累丰富的工作经验，是提高个人素质的关键因素所在。而踏踏实实的增长学识、开阔眼界才是提高个人素质的长远方法。三人同行，则成众，众志成诚，方能撑起企业的现在与未来。企业的发展，离不开团队的精诚协作。</textarea></td>
            </tr>
            <tr align="center">
              <td height="53" colspan="3"><input name="Submit" type="button" class="btn_grey" onClick="outDoc()" value="Word打印"></td>
            </tr>
          </table></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="25">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
  </table>
</form>
<?php
$str=<<<word
<script language="javascript">
function outDoc(){
	var wdapp=new ActiveXObject("Word.Application");
	wdapp.visible=true;
	wddoc=wdapp.Documents.Open("$path");     //打开指定的文档
	var form=document.all.form1;
	title=form.title.value;
	meetingTime=form.meetingTime.value;
	compere=form.compere.value;
	attend=form.attend.value;
	content=form.content.value;
	//输出会议标题
	range =wdapp.ActiveDocument.Bookmarks("title").Range;
	range.Text=title;  
	//输出会议时间
	range =wdapp.ActiveDocument.Bookmarks("meetingTime").Range;
	range.Text=meetingTime;  
	//输出会议主持人
	range =wdapp.ActiveDocument.Bookmarks("compere").Range;
	range.Text=compere;  
	//输出出席人员
	range =wdapp.ActiveDocument.Bookmarks("attend").Range;
	range.Text=attend;
	//输出会议内容
	range =wdapp.ActiveDocument.Bookmarks("content").Range;
	range.Text=content;	    
	wddoc.Application.Printout();
	wdapp=null;
}
</script>
word;
echo $str;
?>
</body>
</html>
