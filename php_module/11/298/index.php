<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ѧ���ɼ�����ϵͳ</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="javascript">
 function chkinput(form)
  {
     if(form.sno.value=="")
	  {
	    alert("������ѧ��!");
	    form.sno.select();
		return(false);
	  }  
  
    return(true);
  }
</script>
<body>
<table width="200" border="0" align="center">
  <tr>
    <td><img src="images/banner.gif" width="567" height="91" /></td>
  </tr>
</table>
<table width="568" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#A7A0F0"><table width="568" height="25" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr><form name="form1" method="post" action="index.php" onsubmit="return chkinput(this)">
        <td bgcolor="#FFFFFF"><div align="center">ѧ��:&nbsp;<input type="text" name="sno" size="25" class="inputcss">&nbsp;<input type="submit" name="submit" class="buttoncss" value="����"></div></td></form>
      </tr>
    </table></td>
  </tr>
</table>

<?php
if($_POST[submit]!="")
 {
   /*
   $sno=$_POST[sno];
   include_once("conn.php");
   $sql=mysql_query("select * from tb_score where sno='".$sno."'",$conn);
   $info=mysql_fetch_array($sql);
  */
   class getinfo
     {
	   private $sqlstr;
	   
	   public function __construct($x)
	    {
		  $this->sqlstr=$x;
		}
	  
	   public function get()
	    {
		  include_once("conn.php");
	  	  $sqlclass=mysql_query($this->sqlstr,$conn);
          $infoclass=mysql_fetch_array($sqlclass);
		  return $infoclass;
		}
	 }
  $str="select * from tb_score where sno='".$sno."'";
  $get=new getinfo($str);
  $info=$get->get();
  
  
  
  
   if($info==false)
    {
	  echo "<script>alert('û�в��ҵ���ѧ����Ϣ!');history.back();</script>";
	  exit;
	}
   else
    {
 

?>
<table width="568" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="568" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#A7A0F0"><table width="568" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="113" height="25" bgcolor="#DFE1F8"><div align="center">����</div></td>
        <td width="111" bgcolor="#DFE1F8"><div align="center">ѧ��</div></td>
        <td width="112" bgcolor="#DFE1F8"><div align="center">����</div></td>
        <td width="112" bgcolor="#DFE1F8"><div align="center">��ѧ</div></td>
        <td width="116" bgcolor="#DFE1F8"><div align="center">����</div></td>
      </tr>
	 
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sname];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sno];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[yw];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sx];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[wy];?></div></td>
      </tr>
	
    </table></td>
  </tr>
</table>
<?php
 }
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
