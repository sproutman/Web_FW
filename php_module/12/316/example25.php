<html>
<head>
<title>文件浏览</title>
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
    <td height="30" align="center"><span class="style2">读取指定文件的内容</span></td>
  </tr>
  <tr>
    <td align="center"><textarea name="textarea" cols="57" rows="10"><?php 
   $mulu=$_GET[mulu];  //获取文件的信息
   $filename=$_GET[filename];
   $type=$_GET[type];
//显示PHP文件的内容
   if(strtoupper($type)==".php"){
      readfile($mulu."\\".$filename);
   }else{   //显示txt文件的内容
      $fp=fopen($mulu."\\".$filename,"r");
   while($line=fgets($fp)){
      $line=htmlentities($line,ENT_COMPAT,"GB2312");
      echo $line; }
   fclose($fp); }  ?></textarea></td>
  </tr>
  <tr>
    <td align="center"><a href="index.php" class="style1">返回目录</a></td>
  </tr>
</table>
</body>
</html>