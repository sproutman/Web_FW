<?php include "conn/conn.php";?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>安全登录</title>
</head>
<link href="css/style.css" rel="stylesheet">
<?php
$str=array("大","更","创","天","科","客","博","技","立","新");
$word=strlen($str);
for($i=0;$i<4;$i++){
	$num=rand(0,$word*2-1);      //$word=$word*2-1
	$img=$img."<img src='images/checkcode/".$num.".gif' width='16' height='16'>";    //显示随机图片
	$pic=$pic.$str[$num];    //将图片转换成数组中的文字
}
?>
<script language="javascript">
	function check(form){
		if(form.txt_user.value==""){
			alert("请输入用户名");form.txt_user.focus();return false;		
		}
		if(form.txt_pwd.value==""){
			alert("请输入密码");form.txt_pwd.focus();return false;
		}
		if(form.txt_yan.value==""){
			alert("请输入验证码");form.txt_yan.focus();return false;
		}
		if(form.txt_yan.value!=form.txt_hyan.value){
			alert("对不起，您输入的验证码不正确!");form.txt_yan.focus();return false;
		}
	}
</script>
<body onselectstart="return false">
<table width="757"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr align="right" valign="top">
    <td height="149" background="images/head.jpg">
	  <table width="100%" height="149"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="51" align="right">
		  <br>		  <br></td>
        </tr>
        <tr>
          <td height="66" align="right"><p>&nbsp;</p>
          <p>博客天空网站欢迎您的光临！！！今天是<?php echo date("Y-m-d");?>&nbsp;&nbsp;&nbsp;&nbsp;</p></td>
        </tr>
        <tr>
		<form name="form" method="post" action="checkuser.php">
          <td height="20" valign="baseline">
            <table width="100%"  border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="32%" height="20" align="center" valign="baseline">&nbsp; </td>
                <td width="67%" align="center" valign="baseline">用户名:
                  <input  name=txt_user size="10">
密码:
<input  name=txt_pwd type=password style="FONT-SIZE: 9pt; WIDTH: 65px" size="6">
验证码:
<input name="txt_yan" style="FONT-SIZE: 9pt; WIDTH: 65px" size="8">
<input type="hidden" name="txt_hyan" id="txt_hyan" value="<?php echo $pic;?>">
<?php echo $img; ?> &nbsp;
<input style="FONT-SIZE: 9pt"  type=submit value=登录 name=sub_dl onClick="return check(form)">
&nbsp; </td>
                <td width="1%" align="center" valign="baseline">&nbsp;</td>
              </tr>
            </table>          </td>
		  </form>
        </tr>
      </table></td>
  </tr>
  <tr align="center">
    <td height="82" background="images/footer.jpg">	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="33%">&nbsp;</td>
        <td width="48%"><span style="FONT-SIZE: 9pt; VERTICAL-ALIGN: middle; FONT-FAMILY: 宋体; TEXT-ALIGN: center">欢迎访问博客网
            请使用IE 6.0 在1024×768分辨率下浏览本网站<br>
CopyRight@
2007 明日科技开发</span></td>
        <td width="19%">&nbsp;</td>
      </tr>
    </table>      </td>
  </tr>
</table>
</body>
</html>

