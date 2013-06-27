<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>学生成绩管理系统</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="javascript">
 function chkinput(form)
  {
     if(form.sno.value=="")
	  {
	    alert("请输入学号!");
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
        <td bgcolor="#FFFFFF"><div align="center">学号:&nbsp;<input type="text" name="sno" size="25" class="inputcss">&nbsp;<input type="submit" name="submit" class="buttoncss" value="查找"></div></td></form>
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
	  echo "<script>alert('没有查找到该学生信息!');history.back();</script>";
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
        <td width="113" height="25" bgcolor="#DFE1F8"><div align="center">姓名</div></td>
        <td width="111" bgcolor="#DFE1F8"><div align="center">学号</div></td>
        <td width="112" bgcolor="#DFE1F8"><div align="center">语文</div></td>
        <td width="112" bgcolor="#DFE1F8"><div align="center">数学</div></td>
        <td width="116" bgcolor="#DFE1F8"><div align="center">外语</div></td>
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
       版权所有&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">吉林省明日科技有限公司</a>! 未经授权禁止复制或建立镜像!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">www.mingrisoft.com</a>, All Rights Reserved! 2006<br />
      <br />
      建议您在大于1024*768的分辨率下使用 </div></td>
  </tr>
</table>
</body>
</html>
