<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��PHP�е���Word�Զ���ӡָ����ʽ�Ļ����¼</title>
</head>
<body>
<?php
//��ȡģ���ĵ����ڵ�·��					
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
              <td width="84" height="32" align="right">������⣺</td>
              <td width="462" colspan="2" align="left" ><input name="title" type="text" id="title4" value="2006���չ����ܽᱨ��" size="50"></td>
            </tr>
            <tr >
              <td height="31" align="right">����ʱ�䣺</td>
              <td colspan="2" align="left" ><input name="meetingTime" type="text" id="meetingTime" value="2006��12��31��"></td>
            </tr>
            <tr >
              <td height="34" align="right" >��
                �� �ˣ�</td>
              <td colspan="2" align="left" ><input name="compere" type="text" id="compere" value="������"></td>
            </tr>
            <tr >
              <td height="39" align="right" >��ϯ��Ա��</td>
              <td colspan="2" align="left" ><input name="attend" type="text" id="attend" value="ȫ��Ա��" size="58"></td>
            </tr>
            <tr >
              <td height="99" align="right" >�������ݣ�</td>
              <td colspan="2" align="left" ><textarea name="content" cols="56" rows="6" class="wenbenkuang" id="content">    �ع�2006��չ��2007��Ҫ������Ա�����µ�һ������˵��ۺ�������һ��ȫ�����ߣ���������ѧʶ�����۷ḻ�Ĺ������飬����߸������ʵĹؼ��������ڡ���̤̤ʵʵ������ѧʶ�������۽������߸������ʵĳ�Զ����������ͬ�У�����ڣ���־�ɳϣ����ܳ�����ҵ��������δ������ҵ�ķ�չ���벻���Ŷӵľ���Э����</textarea></td>
            </tr>
            <tr align="center">
              <td height="53" colspan="3"><input name="Submit" type="button" class="btn_grey" onClick="outDoc()" value="Word��ӡ"></td>
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
	wddoc=wdapp.Documents.Open("$path");     //��ָ�����ĵ�
	var form=document.all.form1;
	title=form.title.value;
	meetingTime=form.meetingTime.value;
	compere=form.compere.value;
	attend=form.attend.value;
	content=form.content.value;
	//����������
	range =wdapp.ActiveDocument.Bookmarks("title").Range;
	range.Text=title;  
	//�������ʱ��
	range =wdapp.ActiveDocument.Bookmarks("meetingTime").Range;
	range.Text=meetingTime;  
	//�������������
	range =wdapp.ActiveDocument.Bookmarks("compere").Range;
	range.Text=compere;  
	//�����ϯ��Ա
	range =wdapp.ActiveDocument.Bookmarks("attend").Range;
	range.Text=attend;
	//�����������
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
