<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>使用聚集函数AVG求某班学生的平均成绩</title>
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
    <td bgcolor="#3497E5"><table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="1">
     <form name="form1" method="post" action="index.php" > 
	  <tr>
        <td bgcolor="#0099CC"><div align="center" class="STYLE1">&nbsp;
            <input type="submit" name="submit" value="求班级各科成绩的平均数值" class="buttoncss">
        </div></td>
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

<table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#3497E5"><table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="61" height="25" bgcolor="#0099CC"><div align="center" class="STYLE1">
          <div align="center">学号</div>
        </div></td>
        <td width="74" bgcolor="#0099CC"><div align="center" class="STYLE1">
          <div align="center">学生姓名</div>
        </div></td>
        <td width="87" bgcolor="#0099CC"><div align="center" class="STYLE1">英语</div></td>
        <td width="90" bgcolor="#0099CC"><div align="center" class="STYLE1">
          <div align="center">语文</div>
        </div></td>
        <td width="89" bgcolor="#0099CC"><div align="center" class="STYLE1">
          <div align="center">数学</div>
        </div></td>
        <td width="92" bgcolor="#0099CC"><div align="center" class="STYLE1"> 
          <div align="center">历史</div>
        </div></td>
      </tr>
	 <?php
	 include_once("conn.php");
	 $sql=mysql_query("select * from tb_student_score order by sid desc",$conn);  
	 $info=mysql_fetch_array($sql);
	 if($info==false)
	  {
	    echo "暂无学生成绩信息!";
	  }
	 else
	  {
	   do
	    {	
	 ?>
	  <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sid];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sname];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[yy];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[yw];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sx];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[ls];?></div></td>
	  </tr>
     <?php
	    }while($info=mysql_fetch_array($sql));
	  }
	  if($_POST[submit]!="")
	   {
	     $sql=mysql_query("select avg(yy) as avgyy,avg(yw) as avgyw,avg(sx) as avgsx,avg(ls) as avgls from tb_student_score ",$conn);  
	     $info=mysql_fetch_array($sql);
	 ?>
	  <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center">统计结果：</div></td>
        <td bgcolor="#FFFFFF"><div align="center"><?php echo number_format($info[avgyy],2);?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo number_format($info[avgyw],2);?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo number_format($info[avgsx],2);?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo number_format($info[avgls],2);?></div></td>
      </tr>
	 <?php
	    }
		mysql_close($conn);
	 ?> 
    </table></td>
  </tr>
</table>
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
