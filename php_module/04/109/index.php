<?php if($Submit==true){
echo $number;
}?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��֤�������ֵ�Ƿ���ָ����Χ��</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
.style2 {font-size: 12px;
	color: #FF0000;
}
.style3 {font-size: 12px}
-->
</style>
</head>
<script language="javascript">
function checknumber(){     
       if (form1.number.value.length!=6) 
    { 
 		alert("����������ȷ��6λ��ţ�");
		form1.number.focus();
		return (false);	 
    } 
		for (i=1;i<form1.number.value.length;i++){
    		ct=form1.number.value.charAt(i);
		     if (!(ct>='0'&&ct<='5'))
		     {
			  alert("���˱��ֻ��������0-5֮�������");
			  form1.number.focus();
		  	  return(false);
	    	     }
		}	
}
</script>
<body>
<table width="450" border="1" cellpadding="0" cellspacing="0" background="images/sss.JPG">
  <form name="form1" method="post" action="">
    <tr align="center">
      <td height="24" colspan="2" class="style1">��֤�������ֵ�Ƿ���ָ����Χ��</td>
    </tr>
    <tr>
      <td width="100" height="20" align="center" class="style1">�û���:</td>
      <td width="344" class="style3"><input name="user" type="text" id="user" size="20" maxlength="50">
          </td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">���˱��:</td>
      <td class="style3">        <input name="number" type="text" id="number2" size="20" maxlength="50">
        <span class="style2"> * ������0-5֮���6λ�������</span>      </td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">����:</td>
      <td class="style3"><input name="pass" type="password" id="pass2" size="20" maxlength="50">
        <span class="style2">*����������</span></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">��ϵ��ַ:</td>
      <td class="style3"><input name="address" type="text" id="address" size="30" maxlength="100"></td>
    </tr>
    <tr>
      <td height="24" align="center">&nbsp;</td>
      <td class="style3"><input type="submit" name="Submit" value="�ύ" onClick="checknumber();">
          <span class="style2"> (*Ϊ������Ŀ)</span>
          <input type="reset" name="Submit2" value="����">
      </td>
    </tr>
  </form>
</table>
</body>
</html>
