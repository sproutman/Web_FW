<?php session_start();
if($Submit=="�ύ"){
 $shili=$file_dir;
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>����ָ��Ŀ¼�µ������ļ�</title>
</head>

<body>
<table width="350" height="150" border="0" cellpadding="0" cellspacing="0" background="images/324.jpg">
  <form name="form1" method="post" action="index.php">
  <tr>
    <td width="132" height="55">&nbsp;</td>
    <td width="135">&nbsp;</td>
    <td width="83">&nbsp;</td>
  </tr>
  <tr>
    <td height="40">&nbsp;</td>
    <td align="center"><input name="file_dir" type="text" id="file_dir" size="18" maxlength="50">    </td>
    <td>&nbsp;<input type="submit" name="Submit" value="�ύ"></td>
  </tr>
  <tr>
    <td height="55">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  </form>
</table>
<?php
       $shili = $file_dir ;
       if ( !file_exists ( $shili )){
          print $shili."Ŀ¼������!" ;
      }else{  
	   $i = 0;
         if ( is_dir ( $shili )){                   //����Ƿ��ǺϷ�Ŀ¼
           if ($shi = opendir ( $shili )){          //��Ŀ¼
		      while ($li = readdir( $shi )){       //��ȡĿ¼
		          $i++ ;
		    echo " $i: $li <br> " ;      } } }     //���Ŀ¼�е�����
         closedir ( $shi ) ;  }  ?>
</body>
</html>
