<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>利用变量查询字符串数据</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="javascript">
 function chkinput(form){
   if(form.bookname.value==""){
     alert("请输入要查找的书名!");
	 form.bookname.select();
	 return(false);
   }
   return(true);
 }
</script>
<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="589" height="79" /></td>
  </tr>
</table>
<table width="589" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="589" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#347434"><table width="589" height="25" border="0" align="center" cellpadding="0" cellspacing="1">
     <form name="form1" method="post" action="index.php" onsubmit="return chkinput(this)">
	  <tr>
        <td bgcolor="#FCCC74"><div align="center">书名：<input type="text" name="bookname" size="25" class="inputcss">&nbsp;&nbsp;<input type="submit" name="submit"  class="buttoncss"  value="查找"></div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
<table width="589" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
   <?php
	  if($_POST[submit]!="")
       {
	  ?>
<table width="589" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#347434"><table width="589"  border="0" align="center" cellpadding="0" cellspacing="1">
      
	  <tr>
        <td width="205" height="25" bgcolor="#FCCC74"><div align="center">书名</div></td>
        <td width="158" bgcolor="#FCCC74"><div align="center">作者</div></td>
        <td width="136" bgcolor="#FCCC74"><div align="center">出版社</div></td>
        <td width="85" bgcolor="#FCCC74"><div align="center">价格</div></td>
      </tr>
	  <?php
	   include_once("conn.php");
	   $sql=mysql_query("select * from tb_book where bookname like '%".$_POST[bookname]."%'",$conn);
	   $info=mysql_fetch_array($sql);
	   if($info==false)
	    {
	  ?>
	  <tr>
        <td height="25" colspan="4" bgcolor="#FFFFFF"><div align="center">没有查找到您要找的记录!</div></td>
        </tr>
      <tr>
	  <?php
	    }else{
		 do{
	  ?>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[bookname];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[writer];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[pub];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[price];?></div></td>
      </tr>
	  <?php
	    }while($info=mysql_fetch_array($sql));
	   }
	  ?>
    </table></td>
  </tr>
</table>
<?php
  }
?>
<table width="600" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"><br />
       版权所有&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">吉林省明日科技有限公司</a>! 未经授权禁止复制或建立镜像!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">www.mingrisoft.com</a>, All Rights Reserved! 2007<br />
      <br />
      建议您在大于1024*768的分辨率下使用 </div></td>
  </tr>
</table>
</body>
</html>
