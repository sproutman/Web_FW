<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>���ύ����ȡ��ѡ��ť��ֵ</title>
<style type="text/css">
<!--
.style1 {
	font-size: 13px;
	font-family: "����";
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style2 {
	font-size: 13px;
	font-family: "����";
}
.style3 {font-size: 13px;
	font-family: "����";
	font-weight: normal;
}
-->
</style>
<script language="javascript">
//�ж��û��������Ƿ�Ϸ�
function getcard(){
	var CardTypeValue;
	for (i=0;i<zhuce.CardType.length;i++){
		if (zhuce.CardType[i].checked){
			CardTypeValue=zhuce.CardType[i].value;
			break;  //ʹ�ø������Լ��ٲ���Ҫ��ѭ������
		}
	}
	if(CardTypeValue=="���֤"){
		if(zhuce.cardNO.value.length!=15 && zhuce.cardNO.value.length!=18){
			alert("�������֤����������");zhuce.cardNO.focus();return;
		}
	}else{
		if(CardTypeValue=="ѧ��֤"){
			if(zhuce.cardNO.value.length!=7 && zhuce.cardNO.value.length!=8){
				alert("�������֤����������");zhuce.cardNO.focus();return;
			}		
		}
	}
}
</script>
</head>
<body>
<table width="590"  border="0" align="center" cellpadding="0" cellspacing="0" background="images/bg.gif">
      <tr valign="middle">
        <td height="25" colspan="3" align="center"><span class="style1">&nbsp;== �û�ע����Ϣ��д == </span></td>
      </tr>
      <tr>
        <td width="280" height="263" align="center" valign="top"><table width="90%"  border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="55%" height="20">&nbsp;</td>
            <td width="45%">&nbsp;</td>
          </tr>
          <tr align="left" valign="top">
          <td height="340" colspan="2"><ul>
              <li class="style1"> �� �� ����Ϊ�û���¼������̳��ͨ��֤����ʹ��Ӣ����ĸ�����ֻ�Ӣ����ĸ�����֡��»��ߵ���ϣ����ȿ�����3-20���ַ�֮�ڡ�</li>
              <li class="style1">��ʵ������ ��������ʵ������������Ϊ������û����Է������롣</li>
              <li class="style1">���룺���趨��6-20λ֮�䣬��¼���뼰ȷ���������һ�¡�</li>
              <li class="style1">֤������������֤�����룬����<span class="style2">����</span>��ȷ�ĺ���<span class="style2">��</span></li>
              <li class="style1">��ַ������������ȷ����ϵ��ַ��</li>
              <li class="style1">Email������д��Ч��Email��ַ���Ա�������ϵ��</li>
            </ul>            <p class="style1">&nbsp; </p>
            </td>
          </tr>
        </table></td>
        <td width="9" background="image/zc2.gif">&nbsp;</td>
        <td width="469" align="center" valign="top">
		  <table width="90%"  border="0" cellpadding="0" cellspacing="0">
        <form name="zhuce" method="post" action="index.php" enctype="multipart/form-data">
		  <tr>
		    <td width="18%" rowspan="2" align="center" valign="bottom"><span class="style2">�� �� ��:</span></td>
		    <td height="16" valign="bottom"></td>
	      </tr>
		  <tr>
            <td height="16" valign="bottom"><input name="zc_username" type="text" id="zc_username" size="20" maxlength="20"> 
              *</td>
          </tr>
          <tr>
            <td height="28" align="center" class="style2">��ʵ����:</td>
            <td><input name="zsxm" type="text" id="zsxm" size="20" maxlength="10">
              *</td>
          </tr>
          <tr>
            <td height="28" align="center" class="style2">��&nbsp;&nbsp;&nbsp;&nbsp;��:</td>
            <td><input name="zc_password" type="password" id="zc_password" size="20" maxlength="30">
              *</td>
          </tr>
          <tr>
            <td height="28" align="center" class="style2">����ȷ��:</td>
            <td><input name="mmqr" type="password" id="mmqr" size="20" maxlength="30">
              *</td>
          </tr>
          <tr>
            <td height="28" align="center" class="style2">֤�����:</td>
            <td class="style2"><input name="CardType" type="radio" value="���֤">
              ���֤
              <input type="radio" name="CardType" value="ѧ��֤">
                ѧ��֤</td>
          </tr>
          <tr>
            <td height="28" align="center" class="style2">֤������:</td>
            <td><input name="cardNO" type="text" id="TEL"  size="20" maxlength="20"></td>
          </tr>
          <tr>
            <td height="28" align="center" class="style2">��ϵ�绰:</td>
            <td><input name="lxdh" type="text" id="lxdh" size="15" maxlength="20">
              *</td>
          </tr>
          <tr>
            <td height="28" align="center" class="style2">OICQQ��:</td>
            <td><input name="qq" type="text" id="qq" size="20" maxlength="20"></td>
          </tr>
          
          <tr>
            <td height="28" align="center" class="style2">Email:</td>
            <td><input name="email" type="text" id="email" size="35" maxlength="50">              
            *</td>
          </tr>
          <tr>
            <td height="28" align="center" class="style2">������ҳ:</td>
            <td><input name="grzy" type="text" id="grzy" size="35" maxlength="50"></td>
          </tr>
          <tr>
            <td height="28" align="center" class="style2">��ϵ��ַ:</td>
            <td><input name="lxdz" type="text" id="lxdz" size="35" maxlength="100">
            *</td>
          </tr>
          <tr>
            <td height="34" align="center">&nbsp;</td>
            <td class="style2"><input name="qrtj" type="submit" id="qrtj" value="ȷ���ύ" onClick="getcard()">
              <input type="reset" name="Submit2" value="ˢ������"></td>
          </tr>
		  </form>
        </table>
          
        </td>
      </tr>
</table>
</body>
</html>
