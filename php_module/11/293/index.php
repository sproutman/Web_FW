<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>数据成员的初始化</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="javascript">
 function chkinput(form)
  {
    if(form.name.value=="")
	 {
	   alert("请输入用户名！");
	   form.name.select();
	   return(false);
	 }
	 if(form.pwd.value=="")
	 {
	   alert("请输入用户密码！");
	   form.pwd.select();
	   return(false);
	 }
   return(true);
  }
</script>
<body>
<table width="198" height="130" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/login.gif"><table width="198" height="130" border="0" cellpadding="0" cellspacing="0">
     <form name="form1" method="post" action="index.php" onsubmit="return chkinput(this)">
	 <tr>
        <td height="35" colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td width="68" height="30">&nbsp;</td>
        <td width="130">&nbsp;<input type="text" name="name" size="15" class="inputcss"></td>
      </tr>
      <tr>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;<input type="password" name="pwd" size="15" class="inputcss"></td>
      </tr>
      <tr>
        <td height="35" colspan="2"><div align="center"><input name="submit" type="submit" value="确定" class="buttoncss">&nbsp;&nbsp;<input type="reset" value="重置" class="buttoncss"></div></td>
      </tr></form>
    </table></td>
  </tr>
</table>
<?php
if($_POST[submit]!="")
  {
   
class chkinput
 {
   private $name;
   private $pwd;
  

   function __construct($x,$y)
    {
     $this->name=$x;
     $this->pwd=$y;
    }


   function checkinput()
   {
     if($this->name=="mr" &&$this->pwd=="mrsoft")
	  {
	     echo "<br><div align=center>恭喜您，登录成功!</div>";
	  }
	 else
	  {
	     echo "<br><div align=center>对不起，密码输入错误!</div>";
	  }   
   }
 }


    $obj=new chkinput($name=$_POST[name],$pwd=$_POST[pwd]);
    $obj->checkinput();
  
  }

?>
</body>
</html>
