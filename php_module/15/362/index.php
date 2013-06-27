<?php include "conn/conn.php";?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>设置页眉页脚</title>
<link href="CSS/style.css" rel="stylesheet">
<style type="text/css">
<!--
body {
	margin-top: 0px;
}
-->
</style>
<script  language="JavaScript">   
var HKEY_RootPath="HKEY_CURRENT_USER\\Software\\Microsoft\\Internet Explorer\\PageSetup\\"; 
function PageSetup_del(){ 
  try{
	  var WSc=new ActiveXObject("WScript.Shell"); 
	  HKEY_Key="header"; 
	  WSc.RegWrite(HKEY_RootPath+HKEY_Key,""); 
	  HKEY_Key="footer"; 
	  WSc.RegWrite(HKEY_RootPath+HKEY_Key,"");
  }catch(e){}
} 
function  PageSetup_set(){   
  try{
	  var WSc=new ActiveXObject("WScript.Shell"); 
	  HKEY_Key="header"; 
	  WSc.RegWrite(HKEY_RootPath+HKEY_Key,"&w&b页码,&p/&P"); 
	  HKEY_Key="footer"; 
	  WSc.RegWrite(HKEY_RootPath+HKEY_Key,"&u&b&d"); 
  }catch(e){}
}
</script>
</head>
<body>
<object id="Wb" classid="ClSID:8856F961-340A-11D0-A96B-00C04Fd705A2" width="0" height="0">
</object>
<table width="747" height="378" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="747" height="378" align="center" valign="top" background="images/bg.gif">&nbsp;
      <table width="741" height="365" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="75" align="right" valign="bottom"><a href="#" onClick="PageSetup_del()">清空页眉页脚</a><a href="#" onClick="PageSetup_set()"> 恢复页眉页脚 </a><a href="#" onClick="document.all.Wb.Execwb(7,1)">打印预览</a> <a href="#" onClick="document.all.Wb.Execwb(6,1)">打印</a> <a href="#" onClick="document.all.Wb.Execwb(6,6)">直接打印</a> <a href="#" onClick="document.all.Wb.Execwb(8,1)">页面设置</a>&nbsp;&nbsp;</td>
        </tr>
        <tr>
          <td height="16">&nbsp;</td>
        </tr>
        <tr>
          <td height="274" align="center" valign="top"><table  id="brand" width="92%" height="48"  border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#CCCCCC" bordercolorlight="#FFFFFF">
            <tr align="center" bgcolor="#EFEFEF">
              <td width="29%" height="30">商品名称</td>
              <td width="12%">等级</td>
              <td width="12%">数量</td>
              <td width="12%">会员价</td>
              <td width="12%">市场价</td>
              <td width="12%">特价</td>
              <td width="11%">折扣</td>
            </tr>
            <?php
	 $sql=mysql_query("select * from tb_brand order by id desc");
	 $info=mysql_fetch_array($sql);
	 do{
	 ?>
            <tr align="center">
              <td width="29%" height="30"><?php echo $info[spname];?></td>
              <td width="12%"><?php echo $info[level];?></td>
              <td width="12%"><?php echo $info[num];?></td>
              <td width="12%"><?php echo $info[memberprice];?></td>
              <td width="12%"><?php echo $info[marketprice];?></td>
              <td width="12%"><?php echo $info[extraprice];?></td>
              <td width="11%"><?php echo $info[rebate];?></td>
            </tr>
            <?php
			  }while($info=mysql_fetch_array($sql))
	 		?>
          </table></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>
