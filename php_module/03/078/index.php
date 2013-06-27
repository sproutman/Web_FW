<?php include "Conn/conn.php"; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>树状导航菜单</title>
<link href="CSS/style.css" rel="stylesheet">
<script language=JavaScript src="js/menu.js" ></script>
<script language="JavaScript">
function imgload() { 
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=imgload.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function imgfind(n, d) {
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=imgfind(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function imghf() {
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function imgbarter() {
  var i,j=0,x,a=imgbarter.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=imgfind(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>
<body>
<table width="259" height="61"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td width="259" valign="top" background="images/sub_new01.GIF"><table width="100%" height="38"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="31%" height="14">&nbsp;</td>
        <td width="69%">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td class="word_white">软件工具下载</td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="259"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="259" valign="top" bgcolor="#FFFFFF"><table width="100%"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="17" valign="top"><img src="images/left_01.GIF" width="17" height="173"></td>
        <td valign="top"><table width="215" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder_LRB_dashed">
          <tr>
            <td width="215" height="75" align="center" valign="top" background="images/images/mr_80.gif">
			<div id='KB1Parent' class='parent'>
              <table width="76%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="84%" height="26"><a href="#"  class="white01" onClick="dilate('KB1'); return false"> <img src="Images/jia.gif" border="0">&nbsp;&nbsp;常用工具</a></td>
                </tr>
              </table>
            </div>
            <div id='KB1Child' class='child'>
              <table width="76%" border="0" cellspacing="2" cellpadding="0">
        <?php
		 $sql=mysql_query("select distinct sname from tb_mend where regular='常用工具' order by uptime desc");
		 $info=mysql_fetch_array($sql);
		 if($info==true){
		  do{
		?>
                <tr>
                  <td width="32%" align="right" class="white01"><img src="images/folder.gif" width="16" height="16" border="0"></td>
                  <td width="68%" height="18">&nbsp;<a href="http://www.mingrisoft.com" onMouseOut="imghf()" onMouseOver="imgbarter('Image23','','../images/dddy_2.gif',1)"><?php echo $info[sname];?></a></td>
                </tr>
                <tr>
       <?php		
       }while($info=mysql_fetch_array($sql));
	   }
	   ?>
                  <td height="2" colspan="2" align="right"></td>
                </tr>
              </table>
            </div>
            <div id='KB2Parent' class='parent'>
              <table width="76%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="84%" height="26"><a href="#"  class="white01" onClick="dilate('KB2'); return false"> <img src="Images/jia.gif" border="0">&nbsp;&nbsp;工具下载</a></td>
                </tr>
              </table>
            </div>
            <div id='KB2Child' class='child'>
              <table width="76%" border="0" cellspacing="2" cellpadding="0">
                <?php
		 $sql=mysql_query("select distinct sname from tb_mend where regular='工具' order by uptime desc");
		 $info=mysql_fetch_array($sql);
		 if($info==true){
		  do{
		 ?>
                <tr>
                  <td width="32%" align="right" class="white01"><img src="images/folder.gif" width="16" height="16" border="0"></td>
                  <td width="68%" height="18">&nbsp;<a href="http://www.mingrisoft.com" onMouseOut="imghf()" onMouseOver="imgbarter('Image23','','../images/dddy_2.gif',1)"><?php echo $info[sname];?></a></td>
                </tr>
                <tr>
                  <?php		
       }while($info=mysql_fetch_array($sql));
	   }
	   ?>
                  <td height="2" colspan="2" align="right"></td>
                </tr>
              </table>
            </div>
            <div id='KB3Parent' class='parent'>
              <table width="76%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="83%" height="26"><a href="#"  class="white01" onClick="dilate('KB3'); return false"> <img src="Images/jia.gif" border="0">&nbsp;&nbsp;补丁下载</a></td>
                </tr>
              </table>
            </div>
            <div id='KB3Child' class='child'>
              <table width="76%" border="0" cellspacing="3" cellpadding="0">
                <?php
		 $sql=mysql_query("select distinct sname from tb_mend where regular='补丁' order by uptime desc");
		 $info=mysql_fetch_array($sql);
		 if($info==true){
		  do{
		 ?>
                <tr>
                  <td width="31%" align="right" class="white01"><img src="images/folder.gif" width="16" height="16" border="0"></td>
                  <td width="69%" height="18">&nbsp;<a href="http://www.mingrisoft.com" onMouseOut="imghf()" onMouseOver="imgbarter('Image19','','../images/hygl_1.gif',1)"><?php echo $info[sname];?></a></td>
                </tr>
                <?php		
       }while($info=mysql_fetch_array($sql));
	   }
	   ?>
                <tr>
                  <td height="2" colspan="2" align="right"></td>
                </tr>
              </table>
            </div>
          <SCRIPT>numTotal=4;scores[1]='KB1';scores[2]='KB1';scores[3]='KB2';scores[4]='KB3';</SCRIPT>			</td>
          </tr>
        </table></td>
        <td width="23" valign="top"><img src="images/left_02.GIF" width="25"></td>
      </tr>
    </table>    </td>
  </tr>
</table>
</body>
</html>