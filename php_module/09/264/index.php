<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�鿴������</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="javascript">
  function chkinput(form)
  {
    if(form.name.value==""){
	  alert("���������!");
	  form.name.select();
	  return(false);
	}
    return(true);
  }
</script>
<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="banner.gif" width="500" height="75" /></td>
  </tr>
</table>
<table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#3586FF"><table width="500" height="25" border="0" cellpadding="0" cellspacing="1">
    <form name="form1" method="post" action="index.php" onsubmit="return chkinput(this)">
	  <tr>
        <td bgcolor="#BDD7FF"><div align="center">���������ݿ������:
            <input type="text" name="name" size="25" class="inputcss">&nbsp;<input type="submit" name="submit" value="�鿴" class="buttoncss"></div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>

<?php
 if($_POST[submit]!="")
  {
?>
<table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#1875FF"><table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="76" height="25" bgcolor="#BDD7FF"><div align="center">����</div></td>
        <td width="68" bgcolor="#BDD7FF"><div align="center">�漰����</div></td>
        <td width="71" bgcolor="#BDD7FF"><div align="center">�����¼�</div></td>
        <td width="71" bgcolor="#BDD7FF"><div align="center">ʱ��
        </div>
          <div align="center"></div></td>
        <td width="208" bgcolor="#BDD7FF"><div align="center">����ʱִ�е�SQL���</div></td>
      </tr>
	  <?php
	   $dbname=$_POST[name];
	   $conn=mysql_connect("localhost","root","root");
       mysql_select_db($dbname,$conn);
       mysql_query("set names gb2312");
	   
	   $sql=@mysql_query("show triggers",$conn);
	   $info=@mysql_fetch_array($sql);
	   if($info==false)
	    {
	  ?>
	  <tr>
        <td height="25" colspan="5" bgcolor="#FFFFFF"><div align="center">�����ݿ�û�����ô�����!</div></td>
        </tr>
	  <?php
	   }
	  else
	   {
	    do
		  {
	  ?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[Trigger];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[Table];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[Event];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[Timing];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[Statement];?></div></td>
      </tr>
	  <?php
	    }
	    while($info=mysql_fetch_array($sql));
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
       ��Ȩ����&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">����ʡ���տƼ����޹�˾</a>! δ����Ȩ��ֹ���ƻ�������!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">www.mingrisoft.com</a>, All Rights Reserved! 2006<br />
      <br />
      �������ڴ���1024*768�ķֱ�����ʹ�� </div></td>
  </tr>
</table>
</body>
</html>
