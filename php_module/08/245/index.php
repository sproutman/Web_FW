<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>
<script language="javascript">
  function chkinput(form){
    if(form.from.value==""){
	  alert("请输入学号的初始值!");
	  form.from.select();
	  return(false);
	}
	  if(form.to.value==""){
	  alert("请输入学号的终止值!");
	  form.to.select();
	  return(false);
	}
  	
	return(true);
  }
</script>
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
     <form  name="form1" method="post" action="index.php" onsubmit="return chkinput(this)">
	  <tr>
        <td bgcolor="#8CA6E6"><div align="center">请输入学号范围：
          <input type="text" name="from" size="20" class="inputcss">&nbsp;到&nbsp;<input type="text" name="to" size="20" class="inputcss">&nbsp;<input type="submit" name="submit" value="查询" class="buttoncss">
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
        <td width="87" height="25" bgcolor="#8CA6E6"><div align="center" class="STYLE1">
          <div align="center">学号</div>
        </div></td>
        <td width="76" bgcolor="#8CA6E6"><div align="center" class="STYLE1">姓名</div></td>
        <td width="72" bgcolor="#8CA6E6"><div align="center" class="STYLE1">外语</div></td>
        <td width="73" bgcolor="#8CA6E6"><div align="center" class="STYLE1">语文</div></td>
        <td width="95" bgcolor="#8CA6E6"><div align="center" class="STYLE1">数学</div></td>
        <td width="90" bgcolor="#8CA6E6"><div align="center" class="STYLE1">历史</div></td>
      </tr>
      <?php
		 include_once("conn.php");
		 $from=$_POST[from];
		 $to=$_POST[to];
		 $sql=mysql_query("select * from tb_student_score where sid in (select sid from tb_student_score where sid between $from and $to) ",$conn);
		 $info=mysql_fetch_array($sql);
		 if($info==false)
		  {
	   ?>
      <tr>
        <td height="25" colspan="9" bgcolor="#FFFFFF"><div align="center">没有查找到相关信息!</div></td>
      </tr>
      <?php
		  }
		  else
		  {
		    do{
		?>
      <tr>
       
        <td  height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sid];?></div></td>
        <td  height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sname];?></div></td>
        <td  height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[yy];?></div></td>
        <td  height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[yw];?></div></td>
        <td  height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sx];?></div></td>
        <td  height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[ls];?></div></td>
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
