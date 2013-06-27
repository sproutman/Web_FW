
<script language="javascript">
function chkinput(form)
 {
    if(form.name.value=="")
	 {
	   alert("请输入员工姓名!"); 
	   form.name.select();
	   return(false);
	 }
	if(form.age.value=="")
	 {
	   alert("请输入员工年龄!"); 
	   form.age.select();
	   return(false);
	 }
	if(form.type.value=="")
	 {
	   alert("请输入工作类别!"); 
	   form.type.select();
	   return(false);
	 }
	 if(form.bm.value=="")
	 {
	   alert("请输入所属部门!"); 
	   form.bm.select();
	   return(false);
	 }
	 if(form.sno.value=="")
	 {
	   alert("请输入身份证号!"); 
	   form.sno.select();
	   return(false);
	 }
    if(form.address.value=="")
	 {
	   alert("请输入员工家庭住址!"); 
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
        <td width="150" height="25" bgcolor="#FFFFFF"><div align="center">员工姓名：</div></td>
        <td width="457" bgcolor="#FFFFFF"><div align="left">&nbsp;<input type="text" name="name" size="30" class="inputcss" value="<?php echo $info[name];?>">
        </div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">所属部门：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">&nbsp;<input type="text" name="bm" size="30" class="inputcss"  value="<?php echo $info[bm];?>"></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">年龄：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">&nbsp;<input type="text" name="age" size="20" class="inputcss"  value="<?php echo $info[age];?>"></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">工作类别：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">&nbsp;<input type="text" name="type" size="25" class="inputcss"  value="<?php echo $info[type];?>"></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">身份证号：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">&nbsp;<input type="text" name="sno" size="30" class="inputcss"  value="<?php echo $info[sno];?>"></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">家庭住址：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">&nbsp;<input type="text" name="address" size="40" class="inputcss"  value="<?php echo $info[address];?>">
		<input type="hidden" name="id" value="<?php echo $info[id];?>">
		</div></td>
      </tr>
      <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input type="submit" value="更改" class="buttoncss">
        &nbsp;&nbsp;<input type="reset" value="重置" class="buttoncss"></div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
<table width="600" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"><br />
      『通用商品信息检索』 版权所有&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">吉林省明日科技有任公司</a>! 未经授权禁止复制或建立镜像!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">www.mingrisoft.com</a>, All Rights Reserved! 2006<br />
      <br />
      建议您在大于1024*768的分辨率下使用 </div></td>
  </tr>
</table>
</body>
</html>
