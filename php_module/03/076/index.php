<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>�Զ����ز˵�</TITLE>
<META content="text/html; charset=gb2312" http-equiv=Content-Type>
<STYLE>
.hl {
	BACKGROUND-COLOR: #FFBE00; COLOR: white; CURSOR: hand
}
</STYLE>

<SCRIPT language="JavaScript">
function move(x, y) {
if (document.all) {
object1.style.pixelLeft += x;
object1.style.pixelTop  += y;
}
else
if (document.layers) {
document.object1.left += x;
document.object1.top  += y;
}
};

function position() {
document.object1.left += -82;
document.object1.top  += 0;
document.object1.visibility = "show"
};

function makeStatic() {
if (document.all) {object1.style.pixelTop=document.body.scrollTop+20}
else {eval('document.object1.top=eval(window.pageYOffset+20)');}
setTimeout("makeStatic()",0);}
</SCRIPT>
<BODY bgColor=#EFF7D6><LAYER class=NS onmouseout="move(-132, 0)" 
onmouseover="move(132, 0)" visibility="hide" top="20" name="object1" 
bgcolor="black" left="0">
<SCRIPT language="JavaScript">
if (document.all)
document.write('<DIV ID="object1" style="Position : Absolute ;Left : -82px ;Top : 20px ;Width : 0px ;Z-Index : 20">')
</SCRIPT>

<TABLE bgColor=#000000 border=0 cellPadding=2 cellSpacing=1 
onmouseout="move(-82, 0)" onmouseover=move(82,0) width=100>
  <TBODY>
  <TR>
    <TD bgColor=#CEEB8C align="center"><FONT face=���� size=3>�����˵�</FONT></TD>
    <TD width=14 height="201" rowSpan=100 align=middle bgColor=#A5DF39>
<SCRIPT language="JavaScript">
if (document.all||document.layers)
document.write('<p align="center"><font size="2" face="Arial Black">��<br>��<br>��<br>��<br>ʽ<br>��<br>��</font></p>')
</SCRIPT>    </TD></TR>
  <SCRIPT language="JavaScript">
if (document.all||document.layers)
makeStatic();

if (document.layers) {
window.onload=position;
}

var sitems=new Array();
var sitemlinks=new Array();

sitems[0]="ͼ�����";
sitems[1]="����Ԥ��";
sitems[2]="ͼ������";
sitems[3]="���󷢲�";
sitems[4]="��������";
sitems[5]="�����Ƽ�";
sitems[6]="����֧��";
sitems[7]="��ϵ����";

sitemlinks[0]="http://www.mingrisoft.com";
sitemlinks[1]="http://www.mingrisoft.com";
sitemlinks[2]="http://www.mingrisoft.com";
sitemlinks[3]="http://www.mingrisoft.com";
sitemlinks[4]="http://www.mingrisoft.com";
sitemlinks[5]="http://www.mingrisoft.com";
sitemlinks[6]="http://www.mingrisoft.com";
sitemlinks[7]="http://www.mingrisoft.com";

for (i=0;i<=sitems.length-1;i++)
if (document.all) {document.write('<TR><TD bgcolor="#EFF7D6" onclick="location=\''+sitemlinks[i]+'\'" onmouseover="className=\'hl\'" onmouseout="className=\'n\'"><FONT SIZE=2>'+sitems[i]+'</FONT></TD></TR>')}
else if (document.layers){document.write('<TR><TD bgcolor="white"><FONT SIZE=2><A HREF="'+sitemlinks[i]+'">'+sitems[i]+'</A></FONT></TD></TR>')}

function hl(n) {
n.className='hl'}
function n(h) {
h.className='n'}
</SCRIPT>
</TBODY></TABLE>
<SCRIPT language="JavaScript">
if (document.all)
document.write('<\/DIV>')
</SCRIPT>
</LAYER></BODY></HTML>
