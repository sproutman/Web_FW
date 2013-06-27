<?php session_start();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>应用文本文件保存访客人数的计数器</title>
<style type="text/css">
<!--
.style1 {
	font-size: 26px;
	font-family: "华文琥珀";
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
//使用文本存储数据
		 if(($fp=fopen("files/files.txt","r"))==false){ echo "打开文件失败!";
		   }else{  $counter=fgets($fp,1024);   //读取文件中数据
		   fclose($fp);                        //关闭文本文件
		   $counter++;                         //计数器增加1
		   $fp=fopen("files/files.txt","w");       //以写的方式打开文本文件
		   fputs($fp,$counter);                //将新的统计数据增加1
		   fclose($fp);    }                   //关闭文	
//从文本文件中读取统计数据
       if(($fp=fopen("files/files.txt","r"))==false){echo "打开文件失败!";}else{
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
