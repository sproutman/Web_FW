<?php if($Submit==true){
echo $suggestion;
echo "<br>".$suggestions;
}?>
<html>
<head>
<meta http-equiv="suggestions-Type" suggestions="text/html; charset=gb2312">
<title>���ƶ����ı���������ַ�����</title>
<style type="text/css">
<!--
.style1 {font-size: 12px}
.style2 {font-size: 13px}
.style3 {color: #669900}
-->
</style>
</head>
<SCRIPT language=JavaScript>
var LastCount =0;
function StatByte(Message,maxs,Used,Remain){ //�ֽ�ͳ��
 var ByteCount = 0;
 var StrValue  = Message.value;
 var StrLength = Message.value.length;
 var maxsValue  = maxs.value;
if(LastCount != StrLength) { // �ڴ��жϣ�����ѭ������
	for (i=0;i<StrLength;i++){
		ByteCount  = (StrValue.charCodeAt(i)<=256) ? ByteCount + 1 : ByteCount + 2;
      if (ByteCount>maxsValue) {
      	Message.value = StrValue.substring(0,i);
		alert("����������಻�ܳ��� " +maxsValue+ " ���ֽڣ�\nע�⣺һ������Ϊ���ֽڡ�");
         ByteCount = maxsValue;
         break;
      }
	}
   Used.value = ByteCount;
   Remain.value = maxsValue - ByteCount;
   LastCount = StrLength;
 }
}
</SCRIPT>

<body>
<table width="423" border="1" cellpadding="0" cellspacing="0" background="images/kkk.JPG">
 <form name="form" method="post" action="index.php">
  <tr align="center">
    <td height="22" colspan="3"><span class="style2">���ƶ����ı���������ַ�����</span></td>
  </tr>
  <tr>
    <td height="22" colspan="3" class="style2">&nbsp;<span class="style3">&nbsp;<em><strong>��ҵ�ڲ������</strong></em></span></td>
  </tr>
  <tr>
    <td width="79" height="22" align="center" class="style1">�������:</td>
    <td colspan="2"><input name="suggestion" type="text" id="suggestion"></td>
  </tr>
  <tr>
    <td align="center" class="style1">�������:</td>
    <td colspan="2"><textarea name="suggestions" cols="30" rows="5" class="wenbenkuang" id="suggestions"
	  onKeyDown="StatByte(this.form.suggestions,this.form.maxs,this.form.used,this.form.remain);"onKeyUp="StatByte(this.form.suggestions,this.form.maxs,this.form.used,this.form.remain);">
	</textarea></td>
  </tr>
  <tr>
    <td height="22" align="center" class="style1">�ֽ���:</td>
    <td colspan="2"><span class="style1">
	 ����ֽ���:
      <input name="maxs" type="text" disabled class="noborder" id="maxs"  value="1000" size="4"> 
	 �����ֽ�:
	  <input name="used" type="text" disabled class="noborder" id="used"  value="0" size="4">
	 ʣ���ֽ�:
	  <input name="remain" type="text" disabled class="noborder" id="remain" value="1000" size="4">
	  </span></td>
  </tr>
  <tr>
    <td height="22" align="center">&nbsp;</td>
    <td width="100"><input type="submit" name="Submit" value="�ύ"></td>
    <td width="236"><input type="reset" name="Submit2" value="����"></td>
  </tr>
  </form>
</table>



</body>
</html>
