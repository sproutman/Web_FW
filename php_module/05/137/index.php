<?php session_start(); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>ͨ��session��ֹҳ��ˢ��</title>
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	font-family: "���ķ���";
	font-weight: bold;
}
.style2 {font-family: "��������"}
-->
</style>
</head>
<body>
<?php 
//ʹ���ı��洢����
		if($_SESSION[temp]==""){
		 if(($fp=fopen("counter.txt","r"))==false){ echo "���ļ�ʧ��!";
		   }else{  $counter=fgets($fp,1024);   //��ȡ�ļ�������
		   fclose($fp);                        //�ر��ı��ļ�
		   $counter++;                         //����������1
		   $fp=fopen("counter.txt","w");       //��д�ķ�ʽ���ı��ļ�
		
		   fputs($fp,$counter);                //���µ�ͳ����������1
		   fclose($fp);    }                   //�ر���	
//���ı��ļ��ж�ȡͳ������
       if(($fp=fopen("counter.txt","r"))==false){echo "���ļ�ʧ��!";}else{
	       $counter=fgets($fp,1024);
	       fclose($fp);
           echo "���ּ�����: " .$counter ; }   //������ʴ���
		   $_SESSION[temp]=1;  //��¼�Ժ�,$_SESSION[temp]��ֵ��Ϊ��,��$_SESSION[temp]��һ��ֵ1
		   }else{
		   echo "<script>alert('��������ˢ�±�ҳ!!'); history.back();</script>";
		   }
?>
<table width="300" border="0" cellpadding="0" cellspacing="0" background="images/141.jpg">
  <tr>
    <td height="35" align="center"><span class="style1">ͨ��session��ֹҳ��ˢ��</span></td>
  </tr>
  <tr>
    <td height="40" align="center"><span class="style2">
      <?php  if(($fp=fopen("counter.txt","r"))==false){echo "���ļ�ʧ��!";}else{
	       $counter=fgets($fp,1024);
	       fclose($fp);
           echo "��ҳ������: " .$counter ; }   //������ʴ���?>
    </span></td>
  </tr>
  <tr>
    <td height="25" align="center">&nbsp;</td>
  </tr>
</table>
</body>
</html>