<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>嵌套查询在查询统计中的应用</title>
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
    <td bgcolor="#0CA5FF"><table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="1">
     <form  name="form1" method="post" action="index.php">
	  <tr>
        <td bgcolor="#3396E4"><div align="center">工资
            <select name="tj">
              <option value=">">大于</option>
              <option value="=">等于</option>
              <option value="<">小于</option>
            </select>
            员工
            <input type="text" name="name" size="25" class="inputcss">&nbsp;<input type="submit" name="submit" class="buttoncss" value="查询"></div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
<table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<?php
if($_POST[submit]!="")
{
?>
<table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#0CA5FF"><table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="102" height="25" bgcolor="#3396E4"><div align="center" class="STYLE1">员工编号</div></td>
        <td width="120" bgcolor="#3396E4"><div align="center" class="STYLE1">员工姓名</div></td>
        <td width="100" bgcolor="#3396E4"><div align="center" class="STYLE1">所属部门</div></td>
        <td width="86" bgcolor="#3396E4"><div align="center" class="STYLE1">类别</div></td>
        <td width="86" bgcolor="#3396E4"><div align="center" class="STYLE1">基本工资</div></td>
      </tr>
	   <?php
		 include_once("conn.php");
		 $sql=mysql_query("select * from tb_laborage where jbgz ".$_POST[tj]." any(select jbgz from tb_laborage where name='".$_POST[name]."')",$conn);
		 $info=mysql_fetch_array($sql);
		 if($info==false)
		  {
	   ?> 
		<tr>
        <td height="25" colspan="6" bgcolor="#FFFFFF"><div align="center">没有查找到相关员工信息!</div></td>
        </tr>
		<?php
		  }
		  else
		  {
		    do{
		?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[id];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[name];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[demp];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[lb];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[jbgz];?></div></td>
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
