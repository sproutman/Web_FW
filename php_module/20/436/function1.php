
//工具提示
/* 在文档中应用如下格式调用:
 <BODY>
 <div id="toolTipLayer" style="position:absolute; visibility: hidden; z-index:0"></div>
 <script language="JavaScript">initToolTips(); </script>
 ...
 <span onMouseOver="toolTip('标签文字');" onMouseOut ="toolTip();">文字</a>
 ...
*/

var ns4 = document.layers;
var ns6 = document.getElementById && !document.all;
var ie4 = document.all;
var offsetX = 0;
var offsetY = 20;
var toolTipSTYLE="";

function initToolTips(){
  if(ns4||ns6||ie4){
    if(ns4) toolTipSTYLE = document.toolTipLayer;
    else if(ns6) toolTipSTYLE = document.getElementById("toolTipLayer").style;
    else if(ie4) toolTipSTYLE = document.all.toolTipLayer.style;
    if(ns4) document.captureEvents(Event.MOUSEMOVE);
    else {
      toolTipSTYLE.visibility = "visible";
      toolTipSTYLE.display = "none";
    }
    document.onmousemove = moveToMouseLoc;
  }
}

function toolTip(msgName, msgEmail, msgIp, msgTime){
  if(toolTip.arguments.length < 1) { // 隐藏
    if(ns4) toolTipSTYLE.visibility = "hidden";
    else toolTipSTYLE.display = "none";
  } else { // 显示
    var content = '<table align=left><tr><td nowrap class=ToolTip bgcolor="#EAEFF7"><font color="#0000CC">' +
    		'　昵称： ' + msgName +  '<br>' +
    		'　邮箱： ' + msgEmail +  '<br>' +
    		'　I P ： ' + msgIp +  '<br>' +
    		'　时间： ' + msgTime +  '&nbsp\;</font></td></tr></table>';
    if(ns4){
      toolTipSTYLE.document.write(content);
      toolTipSTYLE.document.close();
      toolTipSTYLE.visibility = "visible";
    }
    if(ns6){
      document.getElementById("toolTipLayer").innerHTML = content;
      toolTipSTYLE.display='block'
    }
    if(ie4){
      document.all("toolTipLayer").innerHTML=content;
      toolTipSTYLE.display='block'
    }
  }
}

function moveToMouseLoc(e){
  if(ns4||ns6){
    x = e.pageX;
    y = e.pageY;
  } else {
    x = event.x + document.body.scrollLeft;
    y = event.y + document.body.scrollTop;
  }
  toolTipSTYLE.left = x + offsetX;
  toolTipSTYLE.top = y + offsetY;
  return true;
}