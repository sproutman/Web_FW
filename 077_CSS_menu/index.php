<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="CSS/style.css" rel="stylesheet">
<title>����ʽ�����˵�</title>
<SCRIPT language=javascript>
function show(obj,maxg,obj2)
{
  if(obj.style.pixelHeight<maxg)
  {
    obj.style.pixelHeight+=maxg/10;
	obj.filters.alpha.opacity+=20;
	obj2.background="images/title_hide.gif";
    if(obj.style.pixelHeight==maxg/10)
	  obj.style.display='block';
	myObj=obj;
	mymaxg=maxg;
	myObj2=obj2;
	setTimeout('show(myObj,mymaxg,myObj2)','5');
  }
}
function hide(obj,maxg,obj2)
{
  if(obj.style.pixelHeight>0)
  {
    if(obj.style.pixelHeight==maxg/5)
	  obj.style.display='none';
    obj.style.pixelHeight-=maxg/5;
	obj.filters.alpha.opacity-=10;
	obj2.background="images/title_show.gif";
	myObj=obj;
	mymaxg=maxg
	myObj2=obj2;
	setTimeout('hide(myObj,mymaxg,myObj2)','5');
  }
  else
    if(whichContinue)
	  whichContinue.click();
}
function chang(obj,maxg,obj2)
{
  if(obj.style.pixelHeight)
  {
    hide(obj,maxg,obj2);
	nopen='';
	whichcontinue='';
  }
  else
    if(nopen)
	{
	  whichContinue=obj2;
      nopen.click();
	}
	else
	{
	  show(obj,maxg,obj2);
	  nopen=obj2;
	  whichContinue='';
	}
}
</SCRIPT>


<style type="text/css">
<!--
body {
	background-color: #7B9AE7;
}
-->
</style></head>
<body leftmargin="0" topmargin="0">
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=left border=0> 
<TBODY>
  <TR>
    <TD vAlign=top>
      <TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
        <TBODY>
        <TR style="CURSOR: hand">
          <TD vAlign=bottom height=42><IMG height=38 
            src="images/title.gif" width=158> 
</TD></TR></TBODY></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
        <TBODY>
        <TR style="CURSOR: hand">
            <TD class=list_title onmouseover="this.typename='list_title2';" 
          onmouseout="this.typename='list_title';" 
          background="images/title_quit.gif" 
            height=25><SPAN><a href="#"><B>��̨������ҳ</B></A>/<a href="#"><B>�˳�</B></A></SPAN> 
            </TD>
          </TR></TBODY></TABLE>&nbsp; 
      <TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
        <TBODY>
        <TR style="CURSOR: hand">
            <TD class=list_title id=list1 
          onmouseover="this.typename='list_title2';" 
          onclick=chang(menu1,60,list1); 
          onmouseout="this.typename='list_title';" 
          background="images/title_hide.gif" 
            height=25><SPAN>��վ����</SPAN> </TD>
          </TR>
        <TR>
            <TD align="center" valign="middle"> 
              <DIV class=sec_menu id=menu1 
            style="DISPLAY: none; FILTER: alpha(Opacity=0); WIDTH: 158px; HEIGHT: 0px">
                <TABLE  cellSpacing=0 
            cellPadding=0 width=135 align=center>
                  <TBODY>
                    <TR> 
                      <TD height=25><a href="#">��ʼ����Ϣ</a></TD>
                    </TR>
           
                    <TR> 
                      <TD height=25><a href="#">��������Ϣ</a></TD>
                    </TR>
                  
                  </TBODY>
                </TABLE>
              </DIV></TD></TR></TBODY></TABLE>
&nbsp;
&nbsp;
<TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
        <TBODY>
        <TR style="CURSOR: hand">
            <TD class=list_title id=list2 
          onmouseover="this.typename='list_title2';" 
          onclick=chang(menu2,160,list2); 
          onmouseout="this.typename='list_title';" 
          background="images/title_show.gif" 
            height=25><SPAN>��Ϣ����</SPAN> </TD>
          </TR>
        <TR>
            <TD align="center"> 
              <DIV class=sec_menu id=menu2 
            style="DISPLAY: none; FILTER: alpha(Opacity=0); WIDTH: 158px; HEIGHT: 0px">
                <TABLE  cellSpacing=2 
            cellPadding=0 width=135 align=center>
                  <TR> 
                    <TD height=25><a href="#">���ݼ�����</a></TD>
                  </TR>
                  <TBODY>
                    <TR> 
                      <TD height=25><a href="#">����λ�ù���</a></TD>
                    </TR>
                   
					<TR> 
                      <TD height=25><a href="#">��չ���Ĺ���</a></TD>
                    </TR>
					<TR> 
                      <TD height=25><a href="#">������ʳ����</a></TD>
                    </TR>
					<TR> 
                      <TD height=25><a href="#">�������Ĺ���</a></TD>
                    </TR>
					<TR> 
                      <TD height=25><a href="#">�������</a></TD>
                    </TR>
                  </TBODY>
                </TABLE>
              </DIV></TD></TR></TBODY></TABLE>&nbsp;      &nbsp;
<TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
         <TBODY>
           <TR style="CURSOR: hand">
             <TD class=list_title id=list4 
          onmouseover="this.typename='list_title2';" 
          onclick=chang(menu4,60,list4); 
          onmouseout="this.typename='list_title';" 
          background="images/title_show.gif" 
            height=25><SPAN>�������</SPAN> </TD>
           </TR>
           <TR>
             <TD valign="middle">
               <DIV class=sec_menu id=menu4 
            style="DISPLAY: none; FILTER: alpha(Opacity=0); WIDTH: 158px; HEIGHT: 0px">
                 <TABLE  cellSpacing=2 
            cellPadding=0 width=135 align=center>
                   <TBODY>
                     <TR>
                       <TD height=25><a href="#">��������</a></TD>
                     </TR>
                     <TR> 
                      <TD height=25><a href="#">�ͷ��������</a></TD>
                    </TR>
                   </TBODY>
                 </TABLE>
             </DIV></TD>
           </TR>
         </TBODY>
      </TABLE>
       <SCRIPT language=javascript>
  var nopen="";
  var whichContinue='';
      </SCRIPT>
      &nbsp;
      <br>
      <TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
        <TBODY>
          <TR style="CURSOR: hand"> 
            <TD class=list_title id=list57 
          onmouseover="this.typename='list_title2';" 
          onclick=chang(menu57,40,list57); 
          onmouseout="this.typename='list_title';" 
          background="images/title_show.gif" 
            height=25><SPAN>��������</SPAN> </TD>
          </TR>
          <TR> 
            <TD valign="middle"> <DIV class=sec_menu id=menu57 
            style="DISPLAY: none; FILTER: alpha(Opacity=0); WIDTH: 158px; HEIGHT: 0px"> 
                <TABLE width=135 align=center 
            cellPadding=0  cellSpacing=2>
                  <TBODY>
                    <TR> 
                      <TD height=36><a href="#">������Ϣ����</a></TD>
                    </TR>
                  </TBODY>
                </TABLE>
              </DIV></TD>
          </TR>
        </TBODY>
      </TABLE> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
      &nbsp;&nbsp; &nbsp;&nbsp; 
      <TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
        <TBODY>
        <TR style="CURSOR: hand">
            <TD class=list_title id=list8 
          onmouseover="this.typename='list_title2';" 
          onclick=chang(menu8,80,list8); 
          onmouseout="this.typename='list_title';" 
          background="images/title_show.gif" 
            height=25><SPAN>ϵͳ��Ϣ</SPAN></TD>
          </TR>
        <TR>
            <TD valign="middle"><DIV class=sec_menu id=menu8
            style="FILTER: alpha(Opacity=100); WIDTH: 158px; HEIGHT:80px">
                <TABLE  cellSpacing=0 cellPadding=0 width=135 align=center>
                  <TBODY>
              <TR>
                      <TD height=30> 
                        <p style="line-height: 200%"><A onfocus=this.blur(); 
                  href="#">��Ȩ���У����տƼ�</A> </TD></TR>
              <TR>
                      <TD height=30> 
                        <p style="line-height: 200%"><a onFocus=this.blur(); 
                  href="http://www.mingrisoft.com" target=_blank>����֧�֣����տƼ�</a></TD></TR></TBODY></TABLE>
                <p class="sec_menu">&nbsp;</p>
              </DIV></TD></TR></TBODY></TABLE>
    </body>   
</html>