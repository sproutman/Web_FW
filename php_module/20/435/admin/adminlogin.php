<html><title>�����Һ�̨����</title>
<script language="javascript">
   function checklogin()
   {   
       if((login.name.value!="")&&(login.mima.value!=""))
	      return true
		else{
		   alert("�سƻ����벻��Ϊ��!")
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
  <th height="40" colspan="2"><span class="style1">����Ա��¼</span></th>
  </tr>
<tr>
  <th width="92">����Ա:</th>
  <th width="219" align="left">
    <input name="name" type="text" id="name" size="25">
  </th>
</tr>
<tr>
   <th>����:</th>
   <th align="left">
     <input name="mima" type="password" size="25">
   </th>
</tr>
<tr>
   <th colspan="2" align="center">
   <input name="denglu" type="submit" id="denglu" value="��¼">
   </th>
</tr>
</table>
</form>
</body>
</html>
