<?php session_start();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Ӧ���ı��ļ�����ÿ������ļ�����</title>
<style type="text/css">
<!--
.style1 {
	font-size: 26px;
	font-family: "��������";
}
-->
</style>
</head>

<body>
<table width="439" height="284" border="0" cellpadding="0" cellspacing="0" background="images/330.jpg">
  <tr>
    <td width="272" height="120">&nbsp;</td>
    <td width="69">&nbsp;</td>
    <td width="98">&nbsp;</td>
  </tr>
  <tr>
    <td height="45">&nbsp;</td>
    <td align="left" valign="middle"><span class="style1">&nbsp;
      <?php 
//ʹ���ı��洢����
		 if(($fp=fopen("files/files.txt","r"))==false){ echo "���ļ�ʧ��!";
		   }else{  $counter=fgets($fp,1024);   //��ȡ�ļ�������
		   fclose($fp);                        //�ر��ı��ļ�
		   $counter++;                         //����������1
		   $fp=fopen("files/files.txt","w");       //��д�ķ�ʽ���ı��ļ�
		   fputs($fp,$counter);                //���µ�ͳ����������1
		   fclose($fp);    }                   //�ر���	
//���ı��ļ��ж�ȡͳ������
       if(($fp=fopen("files/files.txt","r"))==false){echo "���ļ�ʧ��!";}else{
	       $counter=fgets($fp,1024);
	       fclose($fp);
           echo $counter ; }  
?>
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="119">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
