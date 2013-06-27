<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>禁止网页被另存为</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>
<body topmargin="0" bottommargin="0" leftmargin="0">
<table width="780" height="377" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="778" height="40" align="right" valign="bottom" background="images/bg.jpg"><table width="779" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="26" height="234">&nbsp;</td>
        <td width="502">&nbsp;</td>
        <td width="250">&nbsp;</td>
      </tr>
      <tr>
        <td height="127">&nbsp;</td>
        <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <table width="474" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
            <?php
			include("conn/conn.php");
			$sql=mysql_query("select * from tb_news order by id desc");
			$info=mysql_fetch_array($sql);
			if($info==false){
	       ?>
            <tr>
              <td height="20" colspan="7" align="center" bgcolor="#FFFFFF">暂无经济动向信息!</td>
            </tr>
            <?php
			}else{
			do{
	 		?>
            <tr align="center">
              <td height="22" align="left" bgcolor="#FFFFFF">&nbsp;&nbsp;<img src="images/dot.gif" width="11" height="13">&nbsp;&nbsp;<?php echo $info[newobj];?>                </td>
            </tr>
            <?php
			}while($info=mysql_fetch_array($sql));
			}
		    ?>
          </table>          </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<noscript><iframe src="*.html"></iframe></noscript>
</body>
</html>
