<?php
session_start();
session_start();
if($_SESSION[user]=="")
{
 echo "<script>alert('�벻Ҫ�Ƿ���¼��վ��');history.back();</script>";
 exit;
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ʼ��շ�ϵͳ</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<script language="JavaScript">
 function chkinput(form)
  {
    if(form.mailfrom.value=="")
	 {
	   alert("�����뷢���˵�ַ!");
	   form.mailfrom.select();
	   return(false);
	 }
    if(form.mailto.value=="")
	 {
	   alert("�������ռ��˵�ַ!");
	   form.mailto.select();
	   return(false);
	 }
     if(form.mailsubject.value=="")
	 {
	   alert("�������ʼ�����!");
	   form.mailsubject.select();
	   return(false);
	 }
    if(form.mailbody.value=="")
	 {
	   alert("�������ʼ�����!");
	   form.mailbody.select();
	   return(false);
	 }
	 if(form.mailfrom.value.indexOf('@')<0)
	 {
	   alert("������E-mail��ʽ�������!");
	   form.mailfrom.select();
	   return(false);
	 }
	 if(form.mailto.value.indexOf('@')<0)
	 {
	   alert("�ռ���E-mail��ʽ�������!");
	   form.mailto.select();
	   return(false);
	 }
	 if((form.mailcc.value!="")&&(form.mailcc.value.indexOf('@')<0))
	 {
	   alert("������E-mail��ʽ�������!");
	   form.mailcc.select();
	   return(false);
	 }
	if((form.mailbcc.value!="")&&(form.mailbcc.value.indexOf('@')<0))
	 {
	   alert("������E-mail��ʽ�������!");
	   form.mailbcc.select();
	   return(false);
	 }
	 return(true);
  }

</script>
<body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar">
<?php
  include("top.php");
?>
<table width="800"  border="00" align="center" cellpadding="0" cellspacing="0">
  
  <tr>
    <td width="140" height="480" valign="top" bgcolor="#0099CC">
	<?php
	include("left.php");
	?>
	</td>
    <td width="660" bgcolor="E9E8E8" valign="top"><table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="20" bgcolor="#66CCFF"><div align="center">������</div></td>
      </tr>
      <tr>
        <td  bgcolor="#66CCFF">
		<table width="650" border="0" align="center" cellpadding="0" cellspacing="1">
		<form name="form1" method="post" action="sendmail.php" onSubmit="return chkinput(this)">
          <tr>
            <td width="120" height="25" bgcolor="#cccccc"><div align="center">�����ˣ�</div></td>
            <td width="527" bgcolor="#E9E8E8"><div align="left"><input type="text" name="mailfrom" size="80" class="inputcss" value="<?php echo $_SESSION[user];?>" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#CCCCCC"><div align="center">�ռ��ˣ�</div></td>
            <td height="25" bgcolor="#E9E8E8"><div align="left"><input type="text" name="mailto" size="80" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#CCCCCC"><div align="center">���ͣ�</div></td>
            <td height="25" bgcolor="#E9E8E8"><div align="left"><input type="text" name="mailcc" size="80" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#CCCCCC"><div align="center">���ͣ�</div></td>
            <td height="25" bgcolor="#E9E8E8"><div align="left"><input type="text" name="mailbcc" size="80" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#CCCCCC"><div align="center">���⣺</div></td>
            <td height="25" bgcolor="#E9E8E8"><div align="left"><input type="text" name="mailsubject" size="80" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></div></td>
          </tr>
          <tr>
            <td height="303" colspan="2" bgcolor="#E9E8E8"><div align="left">
              <textarea name="mailbody" class="inputcss" rows="20" cols="99"></textarea>
            </div></td>
          </tr>
          <tr>
            <td height="25" colspan="2" bgcolor="#E9E8E8"><div align="center"><input type="submit" value="����" class="buttoncss">&nbsp;&nbsp;<input type="reset" value="����" class="buttoncss"></div></td>
          </tr>
		  </form>
        </table>
		</td>
      </tr>
    </table>      
  </td>
  </tr>
</table>
<?php
 include("bottom.php");
?>
