<html>
<head>
<title>�ļ����</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style type="text/css">
<!--
.style1 {font-size: 12px}
.style2 {font-size: 14px}
-->
</style>
</head>
<body>
<br>
<table width="450" border="1" cellpadding="0" cellspacing="0" bgcolor="#DDFBFA">
  <tr>
    <td height="30" align="center"><span class="style2">��ȡָ���ļ�������</span></td>
  </tr>
  <tr>
    <td align="center"><textarea name="textarea" cols="57" rows="10"><?php 
   $mulu=$_GET[mulu];  //��ȡ�ļ�����Ϣ
   $filename=$_GET[filename];
   $type=$_GET[type];
//��ʾPHP�ļ�������
   if(strtoupper($type)==".php"){
      readfile($mulu."\\".$filename);
   }else{   //��ʾtxt�ļ�������
      $fp=fopen($mulu."\\".$filename,"r");
   while($line=fgets($fp)){
      $line=htmlentities($line,ENT_COMPAT,"GB2312");
      echo $line; }
   fclose($fp); }  ?></textarea></td>
  </tr>
  <tr>
    <td align="center"><a href="index.php" class="style1">����Ŀ¼</a></td>
  </tr>
</table>
</body>
</html>