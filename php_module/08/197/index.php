<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�鿴���ݱ�</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="imgaes/back.gif" width="400" height="80" /></td>
  </tr>
</table>
<table width="400" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<script language="javascript">
function chkinput(form){
  if(form.dbname.value==""){
    alert("���������ݿ������!");
	form.dbname.select();
	return(false);
  
  }
  return(true);
}
</script>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#3399CC"><table width="400"  border="0" align="center" cellpadding="0" cellspacing="1">
      <form name="form1" method="post" action="index.php" onsubmit="return chkinput(this)">
	  <tr>
        <td height="20" bgcolor="#0299FD"><div align="center">������Ҫ�鿴�����ݿ�����
          <input type="text" name="dbname" size="10" class="inputcss">&nbsp;<input type="submit" name="submit" value="�鿴" class="buttoncss"></div></td>
      </tr>
	  </form>
	  <?php
	  if($_POST[submit]!="")
	  {
	    $dbname=$_POST[dbname];
		$conn=mysql_connect("localhost","root","root");
	    if(@mysql_select_db($dbname,$conn)==false){
		  echo "<script>alert('�����ڸ����ݿ�!');window.location.href='index.php';</script>";
		  exit;
		}
		$sql=mysql_query("show tables",$conn);
		$info=mysql_fetch_array($sql);
		if($info==false)
		 {
		   echo "�����ݿ����ޱ�!";
		 }else{
		 do
		  {
	  ?>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><?php echo $info[0];?></td>
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
