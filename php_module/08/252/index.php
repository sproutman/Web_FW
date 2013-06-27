<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
<!--
.STYLE2 {color: #000000}
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
        <td bgcolor="#FFDA45"><div align="center">根据生日查询员工年龄
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
    <td bgcolor="#0033FF"><table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="98" height="25" bgcolor="#FFDA45"><div align="center" class="STYLE2">员工编号</div></td>
        <td width="127" bgcolor="#FFDA45"><div align="center" class="STYLE2">姓名</div></td>
        <td width="69" bgcolor="#FFDA45"><div align="center">性别</div></td>
        <td width="75" bgcolor="#FFDA45"><div align="center" class="STYLE2">年龄</div></td>
        <td width="125" bgcolor="#FFDA45"><div align="center" class="STYLE2">祖籍</div></td>
      </tr>
      <?php
		 include("conn.php");
		 $rs=new com("adodb.recordset");
		 $rs->open("select ygid,name,sex,address,DateDiff('yyyy',birthday,DATE()) as age from tb_worker",$conn,3,1);
		 if($rs->eof|| $rs->bof)
		 {
		 ?>
      <tr>
        <td height="25" colspan="8" bgcolor="#FFFFFF"><div align="center">没有查找到相关信息!</div></td>
      </tr>
      <?php
		  }
		  else
		  {
		     while(!$rs->eof)
		     {
		?>
      <tr>
        
	      <td  height="25" bgcolor="#FFFFFF"><div align="center"><?php $f=$rs->fields("ygid"); echo $f->value;?></div></td>
		  <td  height="25" bgcolor="#FFFFFF"><div align="center"><?php $f=$rs->fields("name"); echo $f->value;?></div></td>
          <td  height="25" bgcolor="#FFFFFF"><div align="center"><?php $f=$rs->fields("sex"); echo $f->value; ?></div></td>
          <td  height="25" bgcolor="#FFFFFF"><div align="center"><?php $f=$rs->fields("age"); echo $f->value;?></div></td>
          <td  height="25" bgcolor="#FFFFFF"><div align="center"><?php $f=$rs->fields("address"); echo $f->value;?></div></td>
      </tr>
      <?php
	         $rs->movenext;
	       }
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
