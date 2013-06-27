<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>条件联合语句</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>
<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="500" height="75" /></td>
  </tr>
</table>
<table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#679D66"><table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="1">
     <form  name="form1" method="post" action="index.php">
	  <tr>
        <td bgcolor="#A6C2DE"><div align="center">调查全国个大型出版社&nbsp;
            <input type="submit" name="submit" value="查询" class="buttoncss">
        </div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
<?php
 if($_POST[submit]!=""){

?>

<table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>

<table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#679D66"><table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td height="25" colspan="2" bgcolor="#A6C2DE"><div align="center" class="STYLE1">出版社名称</div></td>
        </tr>
      <?php
		 include_once("conn.php");
		 $sql=mysql_query("select pubname from tb_pub group by pubname having pubname='人民邮电出版社' or pubname='机械工业出版社' union all select pubname from tb_pub group by pubname having pubname<>'人民邮电出版社' and pubname<>'机械工业出版社'",$conn);
		 $info=mysql_fetch_array($sql);
		 if($info==false)
		  {
	   ?>
      <tr>
        <td height="25" colspan="4" bgcolor="#FFFFFF"><div align="center">没有查找到相关信息!</div></td>
      </tr>
      <?php
		  }
		  else
		  {
		    do{
		?>
      <tr>
       
        <td  height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[pubname];?></div></td>
      </tr>
      <?php
	    }while($info=mysql_fetch_array($sql));
	   }
	  ?>
	  
	  
    </table></td>
  </tr>
</table>
<?php
 }
?>
<table width="600" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"><br />
       版权所有&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">吉林省明日科技有限公司</a>! 未经授权禁止复制或建立镜像!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">www.mingrisoft.com</a>, All Rights Reserved! 2007<br />
      <br />
      建议您在大于1024*768的分辨率下使用 </div></td>
  </tr>
</table>
</body>
</html>
