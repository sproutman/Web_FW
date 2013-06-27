<HTML>
<HEAD>
<META content="text/html; charset=gb2312" http-equiv=Content-Type>
<TITLE>下拉菜单</TITLE>
<STYLE>
A {
	COLOR: blue; FONT-SIZE: 10pt; TEXT-DECORATION: none;color:#FF6600
}
A:hover {
	COLOR: black; FONT-SIZE: 10pt;color:#395531
}
TD {
	FONT-SIZE: 10pt
}
.iewrap1 {
	HEIGHT: 30px; POSITION: relative
}
.iewrap2 {
	FONT-FAMILY: ;
	POSITION: absolute;
	left: -160px;
	top: 105px;
}
#dropmenu0 {
	Z-INDEX: 1
}
#dropmenu1 {
	Z-INDEX: 1
}
#dropmenu0 {
	FONT-FAMILY: "宋体"
}
#dropmenu1 {
	FONT-FAMILY: "宋体"
}
body {
	background-image: url(images/bg.gif);
}
</STYLE>

<SCRIPT language=JavaScript>
var zindex=1000
function dropit2(whichone){
if (window.themenu&&themenu.id!=whichone.id)
themenu.style.visibility="hidden"
themenu=whichone
if (document.all){
themenu.style.left=document.body.scrollLeft+event.clientX-event.offsetX
themenu.style.top=document.body.scrollTop+event.clientY-event.offsetY+18
if (themenu.style.visibility=="hidden"){
themenu.style.visibility="visible"
themenu.style.zIndex=zindex++}
else{
hidemenu()}}}
function dropit(e,whichone){
if (window.themenu&&themenu.id!=eval(whichone).id)
themenu.visibility="hide"
themenu=eval(whichone)
if (themenu.visibility=="hide")
themenu.visibility="show"
else
themenu.visibility="hide"
themenu.zIndex++
themenu.left=e.pageX-e.layerX
themenu.top=e.pageY-e.layerY+19
return false}
function hidemenu(whichone){
if (window.themenu)
themenu.style.visibility="hidden"}
function hidemenu2(){
themenu.visibility="hide"}
if (document.all)
document.onclick=hidemenu
</SCRIPT>
</HEAD>
<BODY topMargin=0>
<DIV align=center>
<CENTER>
  <TABLE width="862" height="313">
    <TBODY>
      <TR>
        <TD width="862" height=313 align=middle background="images/images_01.gif">		<ILAYER left="420" top="220" height="35px">
          <P>
          <P>
            <LAYER visibility="show"><SPAN class=iewrap1><SPAN class=iewrap2 
            onclick="dropit2(dropmenu0);event.cancelBubble=true;return false"><FONT 
            face=宋体><a  href="#" onclick="if(document.layers) return dropit(event, 'document.dropmenu0')">我是下拉菜单</a></FONT> </SPAN></SPAN></LAYER>
          </ILAYER>
            <BR>
            <p></P>
            <DIV id=dropmenu0 
            style="BACKGROUND-COLOR: #A5DF39; BORDER-BOTTOM: black 1px solid; BORDER-LEFT: black 1px solid; BORDER-RIGHT: black 1px solid; BORDER-TOP: black 1px solid; LEFT: 0px; PADDING-BOTTOM: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px; POSITION: absolute; TOP: 0px; VISIBILITY: hidden; layer-background-color: #408080">
              <SCRIPT language=JavaScript>             
var menu1=new Array()             
menu1[0]='<a href="http://www.mingrisoft.com">明日科技图书网站</a><br>'             
menu1[1]='<a href="http://www.mingrisoft.com">明日科技软件网站</font><br>' 
menu1[2]='<a href="http://www.mingrisoft.com">明日科技客服网站</font><br>'             
if (document.all)             
dropmenu0.style.padding="5px"             
for (i=0;i<menu1.length;i++)             
document.write(menu1[i])             
    </SCRIPT>
            </DIV>
            <SCRIPT language=JavaScript>             
if (document.layers){             
document.dropmenu0.captureEvents(Event.CLICK)             
document.dropmenu0.onclick=hidemenu2}             
    </SCRIPT>
      </TBODY>
  </TABLE>
</CENTER></DIV></BODY></HTML>
