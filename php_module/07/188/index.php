<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>通过ADO方式实现指定时间段的信息检索</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<body>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="400" height="70" /></td>
  </tr>
</table>
<table width="398" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#0066CC"><table width="398" height="25" border="0" cellpadding="0" cellspacing="1">
      <tr>
       <form name="form1" method="post" action="index.php">
	   <td bgcolor="#FFFFFF"><div align="center">从<input type="text" name="t1" size="15">
        &nbsp;&nbsp;到<input type="text" name="t2" size="15">&nbsp;<input type="submit" name="submit" value="查询">
        xxxx-xx-xx</div>
		</td>
		</form>
      </tr>
    </table></td>
  </tr>
</table>
<table width="398" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<?php
if($_POST[submit]!="")
 {
    $t1=$_POST[t1];
	$t2=$_POST[t2];
	include_once("conn.php");
	$sql="select * from tb_time where addtime>='".$t1."' and addtime<='".$t2."'";
	   $rs=new com("adodb.recordset");
	   $rs->open($sql,$conn,1,3);
	   if($rs->eof || $rs->bof)
	    {
		  echo "没有查找到商品信息";
		}
		else
		{
	     
?>
<table width="398" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#0066CC"><table width="398" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="169" height="25" bgcolor="#FFFFFF"><div align="center">商品名称</div></td>
        <td width="226" bgcolor="#FFFFFF"><div align="center">进货时间</div></td>
      </tr>
	  <?php
	   while(!$rs->eof)
	       {
	  ?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php $fields=$rs->fields(name);echo $fields->value;?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php $fields=$rs->fields(addtime);echo $fields->value;?></div></td>
      </tr>
	  <?php
	      $rs->movenext;
		 } 
	  ?>
    </table></td>
  </tr>
</table>
<?php
   }
 }
?>
</body>
</html>
