<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��õ�ǰ�ű�Ŀ¼</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
-->
</style>
</head>

<body>
<table width="475" height="290" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="85" colspan="3"><img src="images/338s.jpg" width="475" height="85"></td>
  </tr>
  <tr>
    <td width="75" background="images/338ssss.jpg">&nbsp;</td>
    <td width="328"><span class="style1">
      <?php  $shili= getcwd () ;      //��õ�ǰ�ű�Ŀ¼
		 $i = 0;
         if ( is_dir ( $shili )){                   //����Ƿ��ǺϷ�Ŀ¼
           if ($shi = opendir ( $shili )){          //��Ŀ¼
		      while ($li = readdir( $shi )){       //��ȡĿ¼
		          $i++ ;
		    echo " $i: $li <br> " ;      } } }     //���Ŀ¼�е�����
		  ?>
    </span></td>
    <td width="75" background="images/338sssss.jpg">&nbsp;</td>
  </tr>
  <tr>
    <td height="126" colspan="3"><img src="images/338ss.jpg" width="475" height="126"></td>
  </tr>
</table> 
</body>
</html>
