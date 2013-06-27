<?php include "Conn/conn.php"; $file_id1=$_GET[file_id]; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>浏览博客文章及评论</title>
<style type="text/css">
<!--
body {
	background-color: #FFFF99;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
td{font-size:9pt;}
-->
</style></head>
<body >
<table width="560" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF">
  <tr align="left" colspan="2" >
    <td width="390" height="25" colspan="3" valign="top" bgcolor="#CEEB6B"> <img src="images/fig_03.gif" width="18" height="22"> 博客文章</td>
  </tr>
  <td height="154" align="center" valign="middle">
    <table width="500" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td>
            <?php 
				$sql=mysql_query("select * from tb_article where id = ".$file_id1);
				$result=mysql_fetch_array($sql);
			?>
            <table width="100%"  border="1" cellpadding="1" cellspacing="1" bordercolor="#D6E7A5" bgcolor="#FFFFFF">
              <tr bgcolor="#FFFFFF">
                <td width="14%" height="27" align="center">博客ID号</td>
                <td width="13%"><?php echo $result[id]; ?></td>
                <td width="11%" align="center">作    者</td>
                <td width="17%"><?php echo $result[author]; ?></td>
                <td width="13%" align="center">发表时间</td>
                <td width="32%"><?php echo $result[now]; ?></td>
              </tr>
              <tr bgcolor="#FFFFFF">
                <td height="28" align="center">博客主题</td>
                <td colspan="5">&nbsp;&nbsp;<?php echo $result[title]; ?></td>
              </tr>
              <tr bgcolor="#FFFFFF">
                <td height="47" align="center">文章内容</td>
                <td colspan="5" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result[content]; ?></td>
              </tr>
          </table></td>
        </tr>
    </table></td>
</table>
</body>
</html>
