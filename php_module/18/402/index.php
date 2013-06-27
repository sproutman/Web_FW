<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>防止Access数据库被下载</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>
<body topmargin="0" bottommargin="0" leftmargin="0">
<table width="778" height="384" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="778" height="40" valign="bottom" background="images/news.jpg"><table width="778" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="50" height="72">&nbsp;</td>
        <td width="673">&nbsp;</td>
        <td width="55">&nbsp;</td>
      </tr>
      <tr>
        <td height="115">&nbsp;</td>
        <td><table width="549" height="60" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#D0D1D3">
          <tr bgcolor="#999999">
            <td width="169" height="24"><div align="center" class="STYLE1"> 要闻事件 </div></td>
            <td width="377"><div align="center" class="STYLE1">新闻主题</div></td>
          </tr>
	  <?php
	   include("conn/conn.php");
	   $sql="select * from tb_news order by pdate desc";
	   $rs=new com("adodb.recordset");
	   $rs->open($sql,$conn,1,3);
	   if($rs->eof || $rs->bof){
	?>
          <tr>
            <td height="20" colspan="5" bgcolor="#FFFFFF"><div align="center">暂无新闻信息！</div></td>
          </tr>
	<?php
		}
	   else{		
		 while(!$rs->eof){
	  ?>
          <tr>
            <td height="20" align="center" bgcolor="#FFFFFF"><div align="center">『
                  <?php $fields=$rs->fields(type);echo $fields->value;?> 
                』            </div></td>
            <td height="20" align="left" bgcolor="#FFFFFF">
              <div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php $fields=$rs->fields(newobj);echo $fields->value;?>
                </div></td>
          </tr>
	  <?php
		  $rs->movenext;
	     }
	   }
	  ?>
        </table></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>	</td>
  </tr>
</table>
<div align="center"></div>
</body>
</html>
