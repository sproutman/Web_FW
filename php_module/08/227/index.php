<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>成绩查询系统</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="750" height="70" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="750" height="70"></td>
  </tr>
</table>
<table width="750" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#729AD6"><table width="750" height="25" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <form name="form1" method="post" action="<?php echo $PHP_SELF;?>">
          <td height="25" colspan="5" bgcolor="#FFFFFF"><div align="center">
            <input type="submit"name="submit1"value="获取第一条记录">&nbsp;
			<input type="submit"name="submit2"value="获取最后一条记录">
          </div></td>
        </form>
      </tr>
      <?php
	  if($_POST[submit1]!="" || $_POST[submit2]!="")
	   {
	     include("conn.php");
		 $rs=new com("adodb.recordset");
		 if($_POST[submit1]!="")
		 {
		 $rs->open("select first(sno) as sno1 ,first(sname) as sname1, first(sclass) as sclass1,first(ssubject) as ssubject1,first(sscore) as sscore1 from score",$conn,3,1);
		 }elseif($_POST[submit2]!=""){
		 $rs->open("select last(sno) as sno1 ,last(sname) as sname1, last(sclass) as sclass1,last(ssubject) as ssubject1,last(sscore) as sscore1 from score",$conn,3,1);
		 }
		 if($rs->eof|| $rs->bof)
		 {
		 ?>
      <tr>
        <td height="20" colspan="5" bgcolor="#FFFFFF"><div align="center">没有查找到该学生成绩！</div></td>
      </tr>
      <?php 
		 }
		 else
		  { 
			
	  ?>
      <tr>
        <td width="170" height="20" bgcolor="#FFFFFF"><div align="center">学号</div></td>
        <td width="170" bgcolor="#FFFFFF"><div align="center">姓名</div></td>
        <td width="143" bgcolor="#FFFFFF"><div align="center">班级</div></td>
        <td width="130" bgcolor="#FFFFFF"><div align="center">科目 </div></td>
        <td width="131" bgcolor="#FFFFFF"><div align="center">成绩</div></td>
      </tr>
      <?php
	  while(!$rs->eof)
		{
	  ?>
      <tr>
        <td width="170" height="20" bgcolor="#FFFFFF"><div align="center">
          <?php $f=$rs->fields("sno1"); echo $f->value;?>
        </div></td>
        <td width="170" bgcolor="#FFFFFF"><div align="center">
          <?php $f=$rs->fields("sname1"); echo $f->value;?>
        </div></td>
        <td width="143" bgcolor="#FFFFFF"><div align="center">
          <?php $f=$rs->fields("sclass1"); echo $f->value;?>
        </div></td>
        <td width="130" bgcolor="#FFFFFF"><div align="center">
          <?php $f=$rs->fields("ssubject1"); echo $f->value;?>
        </div></td>
        <td width="131" bgcolor="#FFFFFF"><div align="center">
          <?php $f=$rs->fields("sscore1"); echo $f->value;?>
        </div></td>
      </tr>
      <?php
	      $rs->movenext;
		  }
		}
	  }
	  ?>
    </table></td>
  </tr>
</table>
  <table width="750" height="70" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td><div align="center">版权所有&nbsp;<a href="http://www.mingrisoft.com/about.asp">吉林省明日科技有限公司</a>! 未经授权禁止复制或建立镜像!<br>Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp">www.mingrisoft.com</a>, All Rights Reserved! 2006<br><br>建议您在大于1024*768的分辨率下使用</div></td>
    </tr>
</table>
</body>
</html>
