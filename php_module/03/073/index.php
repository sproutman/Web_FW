<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="CSS/style.css" rel="stylesheet">
<title>半透明背景的下拉菜单</title>
</head>
<div class=menuskin id=popmenu 
      onmouseover="clearhidemenu();highlightmenu(event,'on')" 
      onmouseout="highlightmenu(event,'off');dynamichide(event)"
	  style="Z-index:100;position:absolute;"></div>
<script src="JS/menu.JS"></script>
<body> 
<TABLE width="757" cellPadding=0 cellSpacing=0 style="WIDTH: 755px" align="center"> 
  <TBODY> 
    <TR> <TD style="VERTICAL-ALIGN: bottom; HEIGHT: 6px"> <TABLE 
      style="BACKGROUND-IMAGE:  url(images/f_head.jpg); WIDTH: 760px; HEIGHT: 154px" 
      cellSpacing=0 cellPadding=0> <TBODY> 
            <TR> 
              <TD height="110" colspan="6" 
          style="VERTICAL-ALIGN: text-top; WIDTH: 80px; HEIGHT: 115px; TEXT-ALIGN: right"></TD> 
            </TR> 
            <TR> 
              <TD height="29" align="center" valign="middle"> <TABLE width="617" align="center" cellPadding=0 cellSpacing=0 style="WIDTH: 580px" VERTICAL-ALIGN: text-top;> 
                  <TBODY> 
                    <TR align="center" valign="middle"> 
                      <TD width="94" style="WIDTH: 80px; COLOR: red;"><SPAN  style="FONT-SIZE: 9pt; COLOR: #cc0033"><img src="images/fig_01.gif" width="22" height="16"></SPAN> <a href="index.php">博客首页</a></TD> 
                      <TD width="94" style="WIDTH: 80px; COLOR: red;"><img src="images/fig_02.gif" width="22" height="16"> <a  onmouseover=showmenu(event,productmenu) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >文章管理</a></TD> 
                      <TD width="94" style="WIDTH: 80px; COLOR: red;"><img src="images/fig_02.gif" width="22" height="16"> <a  onmouseover=showmenu(event,Honourmenu) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand">图片管理</a></TD> 
                      <TD width="106" style="WIDTH: 90px; COLOR: red;"><img src="images/fig_02.gif" width="22" height="16"> <a  onmouseover=showmenu(event,myfriend) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >朋友圈管理</a> </TD> 
					   <TD width="94" style="WIDTH: 80px; COLOR: red;"><img src="images/fig_02.gif" width="22" height="16"> <a  onmouseover=showmenu(event,myuser) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >用户管理</a></TD> 
					  <TD width="133" style="WIDTH: 80px; COLOR: red;"><img src="images/fig_02.gif" width="22" height="16"> <a href="safe.php">退出登录</a></TD> 
                    </TR> 
                  </TBODY> 
                </TABLE></TD> 
            </TR> 
          </TBODY> 
        </TABLE></TD> 
    </TR> 
  </TBODY> 
</TABLE> 
</body>
</html>
