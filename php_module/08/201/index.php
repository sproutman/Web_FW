<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��ѯ����������</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>
<script language="javascript">
 function chkinput(form){
   if(form.birthday.value==""){
     alert("������Ҫ��ѯ������!");
     form.birthday.select();
	 return(false);
   }
 }
</script>
<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="591" height="76" /></td>
  </tr>
</table>
<table width="591" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="591" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#4E82C6"><table width="591" height="25" border="0" align="center" cellpadding="0" cellspacing="1">
      <form name="form1" method="post" action="index.php"  onsubmit="return chkinput(this)">
	  <tr>
        <td bgcolor="#4E82C6"><div align="center">�������ڣ�<input type="text" name="birthday" size="25" class="inputcss">&nbsp;&nbsp;<input type="submit" name="submit" class="buttoncss" value="����">&nbsp;<span class="STYLE1">(xxxx-xx-xx)</span></div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
<table width="591" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="591" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#5282CA"><table width="591" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="98" height="25" bgcolor="#4E82C6"><div align="center" class="STYLE1">���</div></td>
        <td width="96" bgcolor="#4E82C6"><div align="center" class="STYLE1">�û�ID</div></td>
        <td width="97" bgcolor="#4E82C6"><div align="center" class="STYLE1">�û���</div></td>
        <td width="97" bgcolor="#4E82C6"><div align="center" class="STYLE1">�Ա�</div></td>
        <td width="97" bgcolor="#4E82C6"><div align="center" class="STYLE1">��������</div></td>
        <td width="99" bgcolor="#4E82C6"><div align="center" class="STYLE1">���ڰ༶</div></td>
      </tr>
	  <?php
	  if($_POST[submit]!=""){
	   include_once("conn.php");
	   $birthday=$_POST[birthday];
	   $sql=mysql_query("select * from tb_student where birthday='".$birthday."'",$conn);
	   $info=mysql_fetch_array($sql);
	   if($info==false){
	    echo "û�в��ҵ������Ϣ!";
		}else{
		 do{
	  ?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[id];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[userid];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[name];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sex];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[birthday];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[classname];?></div></td>
      </tr>
	  <?php
	        }while($info=mysql_fetch_array($sql));
	      }
	    }
	  ?>
    </table></td>
  </tr>
</table>
<table width="600" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"><br />
       ��Ȩ����&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">����ʡ���տƼ����޹�˾</a>! δ����Ȩ��ֹ���ƻ�������!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">www.mingrisoft.com</a>, All Rights Reserved! 2007<br />
      <br />
      �������ڴ���1024*768�ķֱ�����ʹ�� </div></td>
  </tr>
</table>
</body>
</html>
