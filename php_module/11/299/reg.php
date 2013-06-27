<?php
include_once("top.php");
?>
<script language="javascript">
 function chkinput(form)
  {
    if(form.usernc.value=="")
	 {
	   alert("请输入用户昵称!");
	   form.usernc.select();
	   return(false);
	 }
	 
	 if(form.email.value=="")
	 {
	   alert("请输入E-mail地址!");
	   form.email.select();
	   return(false);
	 }
    return(true);
  }

</script>
<table width="555" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="555" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#3A9ED2"><table width="555" height="100" border="0" align="center" cellpadding="0" cellspacing="1">
     <form name="form1" method="post" action="saveuserinfo.php" onsubmit="return chkinput(this)">
	  <tr>
        <td height="25" colspan="2" bgcolor="#81CAF2"><div align="center">用户注册</div></td>
      </tr>
      <tr>
        <td width="200" height="25" bgcolor="#FFFFFF"><div align="center">用户昵称：</div></td>
        <td width="352" bgcolor="#FFFFFF">&nbsp;<input type="text" name="usernc" class="inputcss" size="25"></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">性别：</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<select name="sex">
          <option selected="selected" value="男">男</option>
          <option value="女">女</option>
        </select>        </td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">E-mail：</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="text" name="email" class="inputcss" size="25"></td>
      </tr>
	  <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center">
          <input type="submit" value="注册" class="buttoncss">
          &nbsp;&nbsp;
          <input type="reset" value="重置" class="buttoncss">
        </div>
          <div align="center"></div></td>
        </tr>
	  </form>
    </table></td>
  </tr>
</table>
<table width="600" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"><br />
      版权所有&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">吉林省明日科技有限公司</a>! 未经授权禁止复制或建立镜像!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">www.mingrisoft.com</a>, All Rights Reserved! 2006<br />
      <br />
      建议您在大于1024*768的分辨率下使用 </div></td>
  </tr>
</table>
</body>
</html>
