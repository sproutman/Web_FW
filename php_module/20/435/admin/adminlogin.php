<html><title>聊天室后台管理</title>
<script language="javascript">
   function checklogin()
   {   
       if((login.name.value!="")&&(login.mima.value!=""))
	      return true
		else{
		   alert("呢称或密码不能为空!")
		   return false
		
		}  
   
   }
</script>
<style type="text/css">
<!--
.style1 {font-size: 16px}
body {
	background-color: #EFF3FF;
}
-->
</style>
<body>
<form action="admin_ok.php" method="post" name="login" onSubmit="return checklogin()">
<p align="center" border="0">&nbsp;</p>
<table width="327" border="1" align="center" bordercolor="#91CFDD" bgcolor="#8CC8E8">
<tr>
  <th height="40" colspan="2"><span class="style1">管理员登录</span></th>
  </tr>
<tr>
  <th width="92">管理员:</th>
  <th width="219" align="left">
    <input name="name" type="text" id="name" size="25">
  </th>
</tr>
<tr>
   <th>密码:</th>
   <th align="left">
     <input name="mima" type="password" size="25">
   </th>
</tr>
<tr>
   <th colspan="2" align="center">
   <input name="denglu" type="submit" id="denglu" value="登录">
   </th>
</tr>
</table>
</form>
</body>
</html>
