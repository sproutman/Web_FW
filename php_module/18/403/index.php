<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>过滤HTML非法字符</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>
<script language="javascript">
function chkinput(form)
  {
   if(form.title.value=="")
    {
	  alert('请输入留言主题!');
	  form.title.select();
	  return(false);
	}
	if(form.content.value=="")
    {
	  alert('请输入留言内容!');
	  form.content.select();
	  return(false);
	}
 
  }
</script>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="754" height="123"><img src="images/banner.gif" width="754" height="123" /></td>
  </tr>
</table>
<table width="754" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td  bgcolor="#6090BE"><table width="754" border="0" align="center" cellpadding="0" cellspacing="1">
     <?php
	   include("conn/conn.php");
	   include("function.php");
	   $sql=mysql_query("select * from tb_guestbook order by createtime desc");
	   $info=mysql_fetch_array($sql);
	   if($info==false)
	    {
		 echo "暂无留言";
		}
		else
		 {
		  do
		   {
	 ?>
	  <tr>
        <td width="151" height="25" bgcolor="#FFFFFF"><div align="center">主&nbsp;&nbsp;&nbsp;题：</div></td>
        <td width="600" bgcolor="#FFFFFF">&nbsp;<?php echo unhtml($info[title]);?></td>
      </tr>
      <tr>
        <td height="95" bgcolor="#FFFFFF"><div align="center">内&nbsp;&nbsp;&nbsp;容：</div></td>
        <td bgcolor="#FFFFFF">&nbsp;<?php echo unhtml($info[content]);?></td>
      </tr>
	  <?php
	       }
	      while($info=mysql_fetch_array($sql));
	    }
	  ?>
    </table></td>
  </tr>
</table>
<table width="754" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="754" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="133" bgcolor="#6090BE"><table width="754" height="150" border="0" align="center" cellpadding="0" cellspacing="1">
     <form name="form1" method="post" action="saveword.php" onsubmit="return chkinput(this)">
	  <tr>
        <td height="20" colspan="2" bgcolor="#6090BE"><div align="center" class="STYLE1">签写留言</div></td>
      </tr>
      <tr>
        <td width="149" height="25" bgcolor="#FFFFFF"><div align="center">主&nbsp;&nbsp;&nbsp;题：</div></td>
        <td width="602" bgcolor="#FFFFFF">&nbsp;<input type="text" name="title" size="35" class="inputcss"></td>
      </tr>
      <tr>
        <td height="100" bgcolor="#FFFFFF"><div align="center">内&nbsp;&nbsp;&nbsp;容：</div></td>
        <td height="100" bgcolor="#FFFFFF">&nbsp;<textarea name="content" cols="60" rows="6" class="inputcss"></textarea></td>
      </tr>
	  <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="提交" class="buttoncss">&nbsp;&nbsp;<input type="reset" value="重置" class="buttoncss"></div></td>
        </tr>
		</form>
    </table></td>
  </tr>
</table>
</body>
</html>
