<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>添加商品类别</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
td{font-size:9pt;}
-->
</style>
</head>



<body topmargin="0" bottommargin="0" leftmargin="0">
<table width="200" height="60" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#006699"><table width="200" height="60" border="0" align="center" cellpadding="0" cellspacing="1">
    <form name="form1" method="post" action="addtype.php">
	 <tr>
        <td height="20" colspan="2" bgcolor="#006699"><div align="center" class="STYLE1">添加商品类别</div></td>
      </tr>
      <tr>
        <td width="58" height="20" bgcolor="#FFFFFF"><div align="center">名称：</div></td>
        <td width="139" bgcolor="#FFFFFF">&nbsp;<input type="text" name="typename" class="inputcss" size="20"></td>
      </tr>
      <tr>
        <td height="20" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="添加" name="submit" class="buttoncss">&nbsp;</div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
</body>
</html>
<?php
if($_POST[submit]!="")
 {
  include "Conn/conn.php";
  $typename=$_POST[typename];
  if(trim($typename)=="")
   {
    echo "<script>alert('请输入商品类别名称!');</script>";
   }
  $createtime=date("Y-m-j H:i:s");
  $sql=mysql_query("select * from tb_type where typename='".$typename."'",$conn); 
  $info=mysql_fetch_array($sql);
  if($info!=false)
   {
    echo "<script>alert('该类别已经添加!');</script>";
	exit;
   }
   else
    {
	  if(mysql_query("insert into tb_type(typename,createtime)values('$typename','$createtime')",$conn))
	   {
	     echo "<script>alert('类别添加成功!');window.opener.location.reload();window.close();</script>";
	   
	   }
	}
 }

?>