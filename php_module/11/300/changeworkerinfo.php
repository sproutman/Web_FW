
<script language="javascript">
function chkinput(form)
 {
    if(form.name.value=="")
	 {
	   alert("������Ա������!"); 
	   form.name.select();
	   return(false);
	 }
	if(form.age.value=="")
	 {
	   alert("������Ա������!"); 
	   form.age.select();
	   return(false);
	 }
	if(form.type.value=="")
	 {
	   alert("�����빤�����!"); 
	   form.type.select();
	   return(false);
	 }
	 if(form.bm.value=="")
	 {
	   alert("��������������!"); 
	   form.bm.select();
	   return(false);
	 }
	 if(form.sno.value=="")
	 {
	   alert("���������֤��!"); 
	   form.sno.select();
	   return(false);
	 }
    if(form.address.value=="")
	 {
	   alert("������Ա����ͥסַ!"); 
	   form.address.select();
	   return(false);
	 }
	return(true); 
 }
</script>
<?php
include_once("top.php");
include_once("conn.php");
$sql=mysql_query("select * from tb_worker where id='".$_GET[id]."'",$conn);
$info=mysql_fetch_array($sql);
?>
<table width="610" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#326292"><table width="610" border="0" cellpadding="0" cellspacing="1">
      <form name="form1" method="post" action="changeuser.php"  onsubmit="return chkinput(this)">
	  <tr>
        <td width="150" height="25" bgcolor="#FFFFFF"><div align="center">Ա��������</div></td>
        <td width="457" bgcolor="#FFFFFF"><div align="left">&nbsp;<input type="text" name="name" size="30" class="inputcss" value="<?php echo $info[name];?>">
        </div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">�������ţ�</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">&nbsp;<input type="text" name="bm" size="30" class="inputcss"  value="<?php echo $info[bm];?>"></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">���䣺</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">&nbsp;<input type="text" name="age" size="20" class="inputcss"  value="<?php echo $info[age];?>"></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">�������</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">&nbsp;<input type="text" name="type" size="25" class="inputcss"  value="<?php echo $info[type];?>"></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">���֤�ţ�</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">&nbsp;<input type="text" name="sno" size="30" class="inputcss"  value="<?php echo $info[sno];?>"></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">��ͥסַ��</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">&nbsp;<input type="text" name="address" size="40" class="inputcss"  value="<?php echo $info[address];?>">
		<input type="hidden" name="id" value="<?php echo $info[id];?>">
		</div></td>
      </tr>
      <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="����" class="buttoncss">
        &nbsp;&nbsp;<input type="reset" value="����" class="buttoncss"></div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
<table width="600" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"><br />
      ��ͨ����Ʒ��Ϣ������ ��Ȩ����&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">����ʡ���տƼ����ι�˾</a>! δ����Ȩ��ֹ���ƻ�������!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">www.mingrisoft.com</a>, All Rights Reserved! 2006<br />
      <br />
      �������ڴ���1024*768�ķֱ�����ʹ�� </div></td>
  </tr>
</table>
</body>
</html>
