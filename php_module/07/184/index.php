<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>用户身份验证</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>

<body>
<table width="250" border="0" align="center" cellpadding="1" cellspacing="0">
  <tr>
    <td height="75" bgcolor="#0099CC"><table width="250" height="75" border="0" cellpadding="0" cellspacing="1">
     <form name="form1" method="post" action="index.php">
	  <tr>
        <td height="25" colspan="2" bgcolor="#0099CC"><div align="center" class="STYLE1">用户身份验证</div></td>
      </tr>
      <tr>
        <td width="60" height="25" bgcolor="#FFFFFF"><div align="center">用户名：</div></td>
        <td width="187" bgcolor="#FFFFFF"><div align="left">&nbsp;<input type="text" name="username" size="22" class="inputcss"></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">密码：</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">&nbsp;<input type="password" name="userpwd" size="22" class="inputcss"></div></td>
      </tr>
	  <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input name="submit" type="submit" value="登录" class="buttoncss"></div></td>
        </tr>
		</form>
    </table></td>
  </tr>
</table>
<?php
if($_POST[submit]!="")
 {
   
    $username=$_POST[username];
	$userpwd=$_POST[userpwd];
	if(trim($username)==""||trim($userpwd)=="")
	 {
	   echo "<script>alert('请输入用户名或用户密码!');history.back();</script>";
	   exit;
	 }
	 
	 class chk
	 {
	    private $name;
		private $pwd;
		public function __construct($x,$y)
		 {
		   $this->name=$x;
		   $this->pwd=$y;
		 }
	    public function chkuser()
		 {
		    include_once("conn.php"); 
		    $rs=new com("adodb.recordset");          //创建记录集对象
		    $rs->open("select * from tb_user where username='".$this->name."' and userpwd='".$this->pwd."'",$conn,3,1); 
            if($rs->eof || $rs->bof)
			 {
			    echo "<script>alert('对不起，密码或用户名错误!');history.back();</script>";
	            exit;
			 }
			else
			 {
			    echo "<script>alert('恭喜您登录成功!');history.back();</script>";
	            exit;
			 }
	     }
	 }
	$chk1=new chk($username,$userpwd);
	$chk1->chkuser();  
	 
 }

?>
</body>
</html>

