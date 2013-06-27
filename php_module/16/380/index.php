<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>邮件群发</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<script language="javascript">
 function addnewuser(x) 
  {
   window.location="saveuser.php?user="+x; 
  }
</script>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20" bgcolor="#006699"><table width="600" height="20" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="93" bgcolor="#FFFFFF"><div align="center">添加收件人：</div></td>
        <td width="198" bgcolor="#FFFFFF"><div align="left"><input type="text" name="new_user" size="30" class="inputcss"></div></td>
        <td width="305" bgcolor="#FFFFFF"><div align="left"><input type="button" value="添加" onClick="javascript:addnewuser(new_user.value)"></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="600" height="40" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#006699"><table width="600" border="0" align="left" cellpadding="0" cellspacing="1">
      <form name="form1"  method="post" action="sendmail.php">
	  <tr>
        <td width="128" height="20" bgcolor="#FFFFFF"><div align="center">选择收件人</div></td>
        <td width="469" height="20" bgcolor="#FFFFFF"><div align="center">收件人地址</div></td>
      </tr>
	  <?php
	   include("conn.php");
	   $sql=mysql_query("select * from user order by id desc",$conn);
	   $info=mysql_fetch_array($sql);
	   if($info==false)
	    {
	     echo "暂无收件人!";
	    }
	   else
	    {
		 do
		 {
	  ?>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><input type="checkbox" name=<?php echo $info[id]; ?> value=<?php echo $info[id]; ?>></div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="left"><?php echo $info[address];?></div></td>
      </tr>
	  <?php
	      }
	     while($info=mysql_fetch_array($sql)); 
		}
	  ?>
	  
	  <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">发件人:</div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="left"><input type="text" name="from" size="30" class="inputcss"></div></td>
      </tr>
	  <tr>
	    <td height="20" bgcolor="#FFFFFF"><div align="center">主题:</div></td>
	    <td height="20" bgcolor="#FFFFFF"><div align="left"><input type="text" name="subject" size="50" class="inputcss"></div></td>
	  </tr>
	  <tr>
	    <td height="60" bgcolor="#FFFFFF"><div align="center">内容:</div></td>
	    <td height="60" bgcolor="#FFFFFF"><div align="left">
	      <textarea name="content" rows="6" cols="50" class="inputcss"></textarea>
	    </div></td>
	  </tr>
	  <tr>
	    <td height="20" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="发送" class="buttoncss"></div></td>
	    </tr>
		</form>
    </table></td>
  </tr>
</table>
</body>
</html>
