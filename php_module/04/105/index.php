<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��֤���ڵ������ʽ</title>
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
function checkdata1(data){
	var str=data;
	 //��JavaScript�У�������ʽֻ��ʹ��"/"��ͷ�ͽ���������ʹ��˫����
	var Expression=/(\d{4}-)(\d{2}-)(\d{2})$/;  //ƥ���ַ����е�ָ��λ����(\d{2})$������2�����ֽ�β
	var objExp=new RegExp(Expression);
	if(objExp.test(str)==true){
		return true;
	}else{
		return false;
	}
}	
</script>
<script language="javascript">
//�ж�����������Ƿ���ȷ
function checkdata(data){ 
if (data=="")
    {return true;}
	subYY=data.substr(0,4)
	if(isNaN(subYY) || subYY<=0){
		return true;
	}
	//ת���·�
	if(data.indexOf('-',0)!=-1){	separate="-"}
	else{
		return true;}
		
		area=data.indexOf(separate,0)
		subMM=data.substr(area+1,data.indexOf(separate,area+1)-(area+1))
		if(isNaN(subMM) || subMM<=0){
		return true;
	}
		if(subMM.length<2){subMM="0"+subMM}
	//ת����
	area=data.lastIndexOf(separate)
	subDD=data.substr(area+1,data.length-area-1)
	if(isNaN(subDD) || subDD<=0){
		return true;
	}
	if(eval(subDD)<10){subDD="0"+eval(subDD)}
	NewDate=subYY+"-"+subMM+"-"+subDD
	if(NewDate.length!=10){return true;}
    if(NewDate.substr(4,1)!="-"){return true;}
    if(NewDate.substr(7,1)!="-"){return true;}
	var MM=NewDate.substr(5,2);
	var DD=NewDate.substr(8,2);
	if((subYY%4==0 && subYY%100!=0)||subYY%400==0){ //�ж��Ƿ�Ϊ����
		if(parseInt(MM)==2){
			if(DD>29){return true;}
		}
		}else{
		if(parseInt(MM)==2){
			if(DD>28){return true;}
		}	
	}
	var mm=new Array(4,6,9,11); //�ж�ÿ���е��������
	for(i=0;i< mm.length;i++){
		if (parseInt(MM) == mm[i]){
			if(parseInt(DD)>30){return true;}
		}else{
			if(parseInt(DD)>31){return true;}
		}
	}
	if(parseInt(MM)>12){return true;}
   return false;}
</script>
<script language="javascript">
function check(){
	if(form1.data.value==""){
		alert("��������ȷ������");form1.data.focus();return;
	}	
	if(!checkdata1(form1.data.value)||form1.data.value.length!=10){
		alert("������Ļ�����ʽ����!");form1.data.focus();return;
	}
			if(checkdata(form1.data.value)){
		alert("����������ڲ���ȷ����:1920-07-17��\n ��ע������!");form1.data.focus();return;
	}
}
</script>

<body>
<table width="450" border="1" cellpadding="0" cellspacing="0" background="images/sss.JPG">
  <form name="form1" method="post" action="">
    <tr align="center">
      <td height="24" colspan="2"><span class="style1">��֤���������ʽ</span></td>
    </tr>
    <tr>
      <td width="100" height="20" align="center" class="style1">�û���:</td>
      <td width="344" class="style3"><input name="user" type="text" id="user" size="20" maxlength="50">
          <span class="style2">�û�����������Ϊ0-30�ֽ�</span></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">����:</td>
      <td class="style3"><input name="pass" type="password" id="pass" size="20" maxlength="50">
      </td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">����ȷ��:</td>
      <td class="style3"><input name="remainpass" type="text" id="remainpass" size="20" maxlength="50">
      </td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">�Ա�:</td>
      <td><span class="style3">
        <input name="sex" type="radio" value="Ů " checked>
        Ů
        <input type="radio" name="sex" value="��">
        ��</span></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">��������:</td>
      <td class="style3"><input name="data" type="text" id="data" size="25" maxlength="50">
          <span class="style2">* ��������ȷ������</span></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">��ʵ����:</td>
      <td class="style3"><input name="true_name" type="text" id="true_name" size="20" maxlength="50"></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">��ϵ�绰</td>
      <td class="style3"><input name="tel" type="text" id="tel" size="20" maxlength="50"></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">���֤����:</td>
      <td class="style3"><input name="ID card" type="text" id="ID card" size="25" maxlength="60"></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">���˿ռ�:</td>
      <td class="style3"><input name="www" type="text" id="www" size="20" maxlength="70"></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">E_mail:</td>
      <td class="style3"><input name="e_mail" type="text" id="e_mail2" size="25" maxlength="60"></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">��������:</td>
      <td class="style3"><input name="postalcode" type="text" id="postalcode" size="20" maxlength="50">
          <span class="style2"> </span></td>
    </tr>
    <tr>
      <td height="20" align="center" class="style1">��ϵ��ַ:</td>
      <td class="style3"><input name="address" type="text" id="address" size="35" maxlength="100"></td>
    </tr>
    <tr>
      <td height="24" align="center">&nbsp;</td>
      <td class="style3"><input type="submit" name="Submit" value="�ύ" onClick="check();">
          <span class="style2"> (*Ϊ������Ŀ)</span>
          <input type="reset" name="Submit2" value="����">
      </td>
    </tr>
  </form>
</table>
</body>
</html>
