<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>禁止复制网页内容</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>
<body onselectstart="return false" topmargin="0" bottommargin="0" leftmargin="0">
<table width="779" height="449" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="778" height="40" align="right" valign="bottom" background="images/bg.jpg"><table width="779" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="210" height="94">&nbsp;</td>
        <td width="549">&nbsp;</td>
        <td width="19">&nbsp;</td>
      </tr>
      <tr>
        <td height="227">&nbsp;</td>
        <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <table width="546" height="50" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#4483D3" bgcolor="#FFFFFF">
            <tr align="center" bgcolor="#C4DEF7">
              <td width="50" height="20">编号</td>
              <td width="69">姓名</td>
              <td width="58">性别</td>
              <td width="78">学校</td>
              <td width="94">教员类型</td>
              <td width="94">可教授课程</td>
              <td width="87">发布日期</td>
			</tr>
            <?php
			include("conn/conn.php");
			$sql=mysql_query("select * from tb_teacher order by pdate desc");
			$info=mysql_fetch_array($sql);
			if($info==false){
	       ?>
            <tr>
              <td height="20" colspan="7" align="center" bgcolor="#FFFFFF">本站暂无教员信息!</td>
            </tr>
            <?php
		}else{
		do{
	  ?>
            <tr align="center">
              <td height="20" bgcolor="#FFFFFF">&nbsp;<?php echo $info[id];?></td>
              <td height="20" bgcolor="#FFFFFF"><?php echo $info[name];?></td>
              <td height="20" bgcolor="#FFFFFF"><?php echo $info[sex];?></td>
              <td height="20" align="left" bgcolor="#FFFFFF">&nbsp;&nbsp;<?php echo $info[school];?></td>
              <td height="20" align="left" bgcolor="#FFFFFF">&nbsp;&nbsp;<?php echo $info[type];?></td>
              <td height="20" align="left" bgcolor="#FFFFFF">&nbsp;&nbsp;<?php echo $info[course];?></td>
              <td height="20" bgcolor="#FFFFFF"><?php echo $info[pdate];?></td>
            </tr>
            <?php
			}while($info=mysql_fetch_array($sql));
			}
		    ?>
          </table></td>
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
<div align="center"></div>
</body>
</html>
