<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ͨ��socket��̷��Ͷ���</title>
<link rel="stylesheet" type="text/css" href="font.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>
<script language="javascript">
  function chkinput(form){
    if(form.ip.value==""){
	  alert("������������صĵ�ַ!");
	  form.ip.select();
	  return(false);
	}
	
	  if(form.port.value==""){
	  alert("����˿ں�!");
	  form.port.select();
	  return(false);
	}
	
	 if(isNaN(form.port.value)==true){
	  alert("�˿�ֻ�����������!");
	  form.port.select();
	  return(false);
	 }
	
	
	
	 if(form.username.value==""){
	  alert("�������û���!");
	  form.username.select();
	  return(false);
	}
	  if(form.userpwd.value==""){
	  alert("��������������!");
	  form.userpwd.select();
	  return(false);
	}
	  if(form.telnumber.value==""){
	  alert("�����������ֻ���!");
	  form.telnumber.select();
	  return(false);
	}
	
	 if(isNaN(form.telnumber.value)==true){
	  alert("�ֻ���ֻ�����������!");
	  form.telnumber.select();
	  return(false);
	 }
	 
	 if(form.receivenumber.value==""){
	  alert("��������շ��ֻ���!");
	  form.receivenumber.select();
	  return(false);
	}
	
	 if(isNaN(form.receivenumber.value)==true){
	  alert("�ֻ���ֻ�����������!");
	  form.receivenumber.select();
	  return(false);
	 }
	 
	  if(form.content.value==""){
	  alert("�������������!");
	  form.content.select();
	  return(false);
	}
    return(true);
  }
</script>
<body>
<table width="367" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="images/back.gif"><table width="367" border="0" align="center" cellpadding="0" cellspacing="0">
      <form name="form1" method="post" action="index.php" onsubmit="return chkinput(this)">
	  <tr>
        <td height="30" colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td width="82" height="25"><div align="center" class="STYLE1">���ص�ַ</div></td>
        <td width="169">&nbsp;<input type="text" name="ip" class="inputcss" size="25"></td>
        <td width="38"><span class="STYLE1">�˿ڣ�</span></td>
        <td width="78"><input type="text" name="port" size="5" class="inputcss"></td>
      </tr>
      <tr>
        <td height="20"><div align="center" class="STYLE1">�û�����</div></td>
        <td height="20">&nbsp;<input type="text" name="username" class="inputcss" size="25"></td>
        <td height="20" colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td height="20"><div align="center" class="STYLE1">���룺</div></td>
        <td height="20">&nbsp;<input type="password" name="userpwd" class="inputcss" size="25"></td>
        <td height="20" colspan="2"><input type="submit" name="submit" class="buttoncss" value="����" /></td>
      </tr>
      <tr>
        <td height="20"><div align="center" class="STYLE1">�����ֻ��ţ�</div></td>
        <td height="20">&nbsp;<input type="text" name="telnumber" class="inputcss" size="25"></td>
        <td height="20" colspan="2"><input type="reset" name="reset" class="buttoncss" value="��д" /></td>
      </tr>
	  <tr>
        <td height="20"><div align="center" class="STYLE1">�����ֻ��ţ�</div></td>
        <td height="20">&nbsp;<input type="text" name="receivenumber" class="inputcss" size="25"></td>
        <td height="20" colspan="2">&nbsp;</td>
	  </tr>
      <tr>
        <td height="72"><div align="center" class="STYLE1">�������ݣ�</div></td>
        <td colspan="3">&nbsp;<textarea name="content" cols="40" rows="5" class="inputcss"></textarea></td>
      </tr>
      <tr>
        <td height="25" colspan="4"><div align="center"></div></td>
        </tr></form>
    </table></td>
  </tr>
</table>
<?php
 if($_POST[submit]!="")
 {
    $smsUID=$_POST[username];  //�������ط�����û���������  
    $smsPWD=$_POST[userpwd];  
    $smsSocket=$_POST[id];   //�������ص�IP  
    $smsPost=$_POST[port];     //�������صĶ˿�  
    $fp=@fsockopen($smsSocket,$smsPost,&$errno,  &$errstr,  $smsTimeout);  
     if(!$fp)  
      {  
         echo  "<script>alert('�������������ʧ��!');</script>";  
      }  
     else  
      {  
         //��¼���������ķ�����  
        fputs($fp,"login\n");  
        fputs($fp,$smsUID."\n");  
        fputs($fp,$smsPWD."\n");  
        fputs($fp,"\n");  
        $MessageContent=trim($_POST[content]);  
        $MobileNo=trim($_POST[telnumber]);
		$ReceiveNo=trim($_POST[receivenumber]);  
        $ServiceType="MFFW";   //�ƷѴ���TP0.5�����շ�  
        $Priority="0";        //�������ȼ�  
        $AgentFlag="0";  //���շѱ�־  
        $MoFlag="2";     //�㲥��  
        $ExpireTime="";   //����ʧЧʱ��  
        $ScheduleTime="";   //��ʱ����ʱ��  
        $ReportFlag="1";      //״̬����  
        $status="255";       //��Ҫ����״̬����  
        $MessageType="TEXT";       //��������,�ı���Ϣ  
        $FreeTerminalNo=$MobileNo;    //�Ƿ��ֻ�����,��ʵ�������ն��ŷ��շ� 
        $TargetTerminalNo=$ReceiveNo;     //���շ��ֻ�����  
        $SourceTerminalNo=$MobileNo;       //���ͷ��ֻ�����  
        $MessageId="123";  
        print(fgets($fp,4096));  
        print(fgets($fp,4096));  
        fputs($fp,"submit"."\n");  
        fputs($fp,$MessageId."\n");  
        fputs($fp,$FreeTerminalNo."\n");  
        fputs($fp,$SourceTerminalNo."\n");  
        fputs($fp,$TargetTerminalNo."\n");  
        fputs($fp,$ServiceType."\n");  
        fputs($fp,$MoFlag."\n");  
        fputs($fp,$ReportFlag."\n");  
        fputs($fp,$ExpireTime."\n");  
        fputs($fp,$ScheduleTime."\n");  
        fputs($fp,$MessageType."\n");  
        $MessageContent=str_replace("\r","",str_replace("\n","",$MessageContent)); //�����лس�  
        fputs($fp,$MessageContent."\n");  
        fputs($fp,"\n");  
        print("<div align=center>���ͳɹ�!".$MobileNo."  :  ".$MessageContent."</div>");  
        fclose($fp);  
    }  
 }
?>
</body>
</html>
