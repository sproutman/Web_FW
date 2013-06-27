<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>关闭弹出窗口时自动刷新父窗口</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>
<script language="javascript">
function open_add()
 {
  window.open("addtype.php","newframe","width=200,height=50 ,left=200 ,top=200 ,location=no,menubar=no,toolbar=no,scrollbars=no,status=no");
 }
</script>
<body>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#006699"><table width="300" height="60" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td height="20" colspan="2" bgcolor="#006699"><div align="center" class="STYLE1">商品大类管理</div></td>
      </tr>
      <tr>
        <td width="169" height="20" bgcolor="#FFFFFF"><div align="center">商品类别</div></td>
        <td width="128" bgcolor="#FFFFFF"><div align="center">类别添加时间</div></td>
      </tr>
	  <?php
	  include "Conn/conn.php";
	  $sql=mysql_query("select * from tb_type order by createtime desc",$conn);
	  $info=mysql_fetch_array($sql);
	  if($info==false)
	   {
	  ?>
      <tr>
        <td height="20" colspan="2" bgcolor="#FFFFFF"><div align="left"></div>          <div align="center"><?php echo "暂无商品类别";?></div></td>
        </tr>
	  <?php
	   }
	   else
	   {
	     do
		  {
	  
	  ?>
	   <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="left">&nbsp;<?php echo $info[typename];?></div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info[createtime];?></div></td>
      </tr>
	  <?php
	      }
	     while($info=mysql_fetch_array($sql));
	   }
	  ?>
    </table></td>
  </tr>
</table>
<table width="300" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="300" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="right"><input type="button" value="添加" class="buttoncss" onclick="javascript:open_add()"></div></td>
  </tr>
</table>
</body>
</html>
