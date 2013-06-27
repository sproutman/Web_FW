<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="css/style.css" rel="stylesheet">
<title>鼠标右键菜单</title>
<script>
function c(css)
	{menu.className=css;}
function link(act,txt)
	{document.write("<div class=link onMouseOver=this.className='overlink' onMouseOut=this.className='link' style='padding-left:16;padding-top:1;padding-bottom:1' onclick="+act+">"+txt+"</div>")}
function showmenu(){
	var rightedge=document.body.clientWidth-event.clientX-100
	var bottomedge=document.body.clientHeight-event.clientY-25
if (rightedge<menu.offsetWidth)
	menu.style.left=document.body.scrollLeft+event.clientX-menu.offsetWidth;
else
	menu.style.left=document.body.scrollLeft+event.clientX
if (bottomedge<menu.offsetHeight)
	menu.style.top=document.body.scrollTop+event.clientY-menu.offsetHeight
else
	menu.style.top=document.body.scrollTop+event.clientY
	menu.style.visibility="visible"
return false}
function hidemenu(){
	menu.style.visibility="hidden"}
function pop(win){
window.open(win,'','')}
</script>
<style type="text/css">
<!--
.style1 {
	font-size: 14pt;
	color: #FF0000;
}
-->
</style>
</head>
<body bgcolor="#568EC7">
<div id=menu class=up style="text-align: left;position: absolute; visibility: hidden; width: 125px; z-index: 200;padding:1px">
<script>
link('pop("http://www.mingrisoft.com")','明日科技图书网');
link('pop("http://www.ptpress.com")','人民邮电出版社');
link('pop("http://www.mingrisoft.com")','明日科技软件网');
link('pop("http://www.cccxy.com")','长春程序员网站');
link('pop("http://www.cccxy.com")','明日编程词典网');
</script></div>
<SCRIPT language=JavaScript>
if (document.all&&window.print){
document.oncontextmenu=showmenu
document.body.onclick=hidemenu}
</SCRIPT>
<table width="825" height="409" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/bg.gif"><table width="825" height="148" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="26">&nbsp;</td>
      </tr>
      <tr>
        <td height="122" align="center"><span class="style1">请单击鼠标右键！</span></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
