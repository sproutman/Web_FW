<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>获得当前脚本目录</title>
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
      <?php  $shili= getcwd () ;      //获得当前脚本目录
		 $i = 0;
         if ( is_dir ( $shili )){                   //检测是否是合法目录
           if ($shi = opendir ( $shili )){          //打开目录
		      while ($li = readdir( $shi )){       //读取目录
		          $i++ ;
		    echo " $i: $li <br> " ;      } } }     //输出目录中的内容
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
