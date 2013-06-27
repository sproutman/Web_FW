<?php session_start(); include "conn/conn.php"; include "check_login.php";?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="css/style.css" rel="stylesheet">
<title>用户管理</title>
</head>
<body> 
<TABLE width="757" cellPadding=0 cellSpacing=0 style="WIDTH: 755px" align="center"> 
  <TBODY> 
    <TR> 
      <TD style="VERTICAL-ALIGN: bottom; HEIGHT: 6px" colSpan=3> <TABLE 
      style="BACKGROUND-IMAGE: url(images/f_head.jpg); WIDTH: 760px; HEIGHT: 154px" 
      cellSpacing=0 cellPadding=0> 
          <TBODY> 
            <TR> 
              <TD height="110" colspan="7" 
          style="VERTICAL-ALIGN: text-top; WIDTH: 80px; HEIGHT: 115px; TEXT-ALIGN: right"></TD> 
            </TR> 
            <TR> 
              <TD width="686" height="34" align="right" valign="middle"><TABLE cellPadding=0 cellSpacing=0>
                <TBODY>
                  <TR align="center" valign="middle">
                    <TD width="289" height="25" style="WIDTH: 80px; COLOR: red;"><img src="images/fig_02.gif" width="22" height="16">&nbsp;<a href="browseclient.php">用户管理</a></TD>
                    <TD width="289" style="WIDTH: 80px; COLOR: red;"><img src="images/fig_02.gif" width="22" height="16">&nbsp;<a href="safe.php">安全退出</a></TD>
                  </TR>
                </TBODY>
              </TABLE> </TD> 
              <TD width="72" align="center" valign="middle">&nbsp;</TD>
            </TR> 
          </TBODY> 
        </TABLE></TD> 
    </TR> 
    <TR> 
  <td background="images/top.jpg">&nbsp;
  </td>
    </TR>
    <TR>
      <td align="center" background="images/center.jpg"><br>
        <?php if ($page=="") {$page=1;}; ?>
        <table width="600" height="137"  border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="137" align="center" valign="top">
              <table width="600" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF">
                <tr align="left" colspan="2" >
                  <td width="390" height="25" colspan="3" valign="top" bgcolor="#CEEB6B"> <img src="images/fig_03.gif" width="18" height="22"><span class="tableBorder_LTR"> 浏览用户信息</span> </td>
                </tr>
                <?php
						if ($page){
						   $page_size=2;     //每页显示2条记录
						   $query="select count(*) as total from tb_client order by id desc";   
							$result=mysql_query($query);       //查询总的记录条数
							$message_count=mysql_result($result,0,"total");       //为变量赋值
							$page_count=ceil($message_count/$page_size);	  //根据记录总数除以每页显示的记录数求出所分的页数
							$offset=($page-1)*$page_size;			//计算下一页从第几条数据开始循环  
							for ($i=1; $i<2; $i++) {        
							if ($i==1) {
								$sql=mysql_query("select * from tb_client order by id desc limit $offset, $page_size");			
								$result=mysql_fetch_array($sql);
								}
							do{
							?>
                <tr>
                  <td height="82" align="center" valign="middle" >
                    <table width="540" border="1" align=center cellpadding=3 cellspacing=2 bordercolor="#FFFFFF" bgcolor="#FFFFFF" class=i_table>
                      <tr bgcolor="#FFFFFF">
                        <td width=13% align="center" valign=middle> 用户ID</td>
                        <td align="left"><?php echo $result[id]; ?></td>
                        <td width=13% align="center">用户名</td>
                        <td width=43% align="left"><?php echo $result[regname]; ?></td>
                      </tr>
                      <tr bgcolor="#FFFFFF">
                        <td width=13% align="center" valign=middle>真实姓名</td>
                        <td align="left"><?php echo $result[regrealname]; ?></td>
                        <td align="center">密 &nbsp;码</td>
                        <td align="left"><?php echo $result[regpwd]; ?></td>
                      </tr>
                  </table></td>
                </tr>
                <?php
				    }while($result=mysql_fetch_array($sql));
				?>
              </table>
              <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr bgcolor="#EFF7DE">
                  <td>&nbsp;&nbsp;页次：<?php echo $page;?>/<?php echo $page_count;?>页 记录：<?php echo $message_count;?> 条&nbsp;</td>
                  <td align="right" class="hongse01">
                    <?php
				  if($page!=1)
				   {
				     echo  "<a href=browseclient.php?page=1>首页</a>&nbsp;";
					 echo "<a href=browseclient.php?page=".($page-1).">上一页</a>&nbsp;";
				   }
				  if($page<$page_count)
				   {
				        echo "<a href=browseclient.php?page=".($page+1).">下一页</a>&nbsp;";
				        echo  "<a href=browseclient.php?page=".$page_count.">尾页</a>";
				   }
				 } 
				 }
				?>
&nbsp;&nbsp; </td>
                </tr>
            </table></td>
          </tr>
        </table></td>
    </TR>
    <TR>
      <td background="images/bottom.jpg">&nbsp;</td>
    </TR> 
    <TR> 
      <TD height="82" colSpan=3 align="center" background="images/footer.jpg"> 欢迎访问博客网
        请使用IE
        6.0
        在1024×768分辨率下浏览本网站<BR> 
        CopyRight@
        2007
        明日科技开发</TD> 
    </TR> 
  </TBODY> 
</TABLE> 
</body>
</html>
