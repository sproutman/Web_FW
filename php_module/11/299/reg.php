<?php
include_once("top.php");
?>
<script language="javascript">
 function chkinput(form)
  {
    if(form.usernc.value=="")
	 {
	   alert("�������û��ǳ�!");
	   form.usernc.select();
	   return(false);
	 }
	 
	 if(form.email.value=="")
	 {
	   alert("������E-mail��ַ!");
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
        <td height="25" colspan="2" bgcolor="#81CAF2"><div align="center">�û�ע��</div></td>
      </tr>
      <tr>
        <td width="200" height="25" bgcolor="#FFFFFF"><div align="center">�û��ǳƣ�</div></td>
        <td width="352" bgcolor="#FFFFFF">&nbsp;<input type="text" name="usernc" class="inputcss" size="25"></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">�Ա�</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<select name="sex">
          <option selected="selected" value="��">��</option>
          <option value="Ů">Ů</option>
        </select>        </td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">E-mail��</div></td>
        <td height="25" bgcolor="#FFFFFF">&nbsp;<input type="text" name="email" class="inputcss" size="25"></td>
      </tr>
	  <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center">
          <input type="submit" value="ע��" class="buttoncss">
          &nbsp;&nbsp;
          <input type="reset" value="����" class="buttoncss">
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
      ��Ȩ����&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">����ʡ���տƼ����޹�˾</a>! δ����Ȩ��ֹ���ƻ�������!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">www.mingrisoft.com</a>, All Rights Reserved! 2006<br />
      <br />
      �������ڴ���1024*768�ķֱ�����ʹ�� </div></td>
  </tr>
</table>
</body>
</html>
