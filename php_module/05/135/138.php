<?php  session_start();
    if($_COOKIE['cookie1']!=''){	  
  ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta http-equiv="refresh" content="5;url=138.php">
<title>ʹ��COOKIE�����û�������վ��ʱ��</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {
	font-size: 25px;
	font-family: "�����п�";
}
-->
</style></head>

<body>
<table width="392" height="257" border="1" cellpadding="0" cellspacing="0" background="images/138sss.jpg">
  <tr>
    <td><p class="style1">&nbsp;&nbsp;��ʵ����ҪӦ��COOKIEʵ�ֶ���վ����ʱ�������,�����������վ��ͣ����ʱ�䳬����վ�涨�ķ���ʱ��ʱ,���Զ���ת����¼ҳ��.ֻ�����µ�¼�ſ��Է���</p>
    <p class="style1">�ڶ���</p></td>
  </tr>
</table>
</body>
</html>
<?php   }else{ 
echo "������<br>";
echo "���ڱ���վͣ����ʱ���Ѿ������������Ƶ�ʱ��,ϵͳ����3���Ӻ��˳���¼!!лл";
echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\">3�����˳���¼,���Ե�......";
}?>