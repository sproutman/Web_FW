<?php include "Conn/conn.php";?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="../CSS/style.css"  rel="stylesheet">
<title>浏览全部博客文章</title>
<style type="text/css">
td {
	font-size: 9pt;
	color: #cc0033;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style></head>
<body  scroll=no> 
<table width="757" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="758" height="153" background="images/f_head.jpg">&nbsp;</td>
  </tr>
  <tr>
    <td height="224" background="images/bg.jpg"><table width="560" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF">
      <tr align="left" colspan="2" >
        <td width="390" height="25" colspan="3" valign="top" bgcolor="#CEEB6B"> <img src="images/fig_03.gif" width="21" height="17"><span class="tableBorder_LTR"> 查看全部博客文章 </span> </td>
      </tr>
      <tr>
        <td height="31" align="center" valign="top" ><table width="500"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><table width="504"  border="0" cellspacing="0" cellpadding="0" valign="top">
                  <?php
							$sql=mysql_query("select id,title from tb_article order by id desc");			
							$info=mysql_fetch_array($sql);
							do{
						  ?>
                  <tr>
                    <td width="504" align="left" valign="top"> &nbsp;·&nbsp;<a href="#" onClick="manage(<?php echo $info[id];?>)"><?php echo $info[title];?></a> </td>
                  </tr>
                  <?php 
					  }while($info=mysql_fetch_array($sql));
				 ?>
              </table></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="82" align="center" background="images/footer.jpg">欢迎访问博客网
      请使用IE
      6.0 在1024×768分辨率下浏览本网站<br>
CopyRight@
2006 明日科技开发</td>
  </tr>
</table>

<script language="javascript">
	function manage(x){
		var hdc=window.open('article.php?file_id='+x,'','width=560,height=200');
		width=screen.width;
		height=screen.height;
		hdc.moveTo((width-560)/2,(height-339)/2);
	}
</script>

</body>
</html>
