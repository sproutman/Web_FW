<?php
session_start();
include "conn/conn.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="css/style.css" rel="stylesheet">
<title>博客主页</title>
</head>
<script language="javascript">
function check(form){
if (document.myform.sel_key.value==""){
	alert("请输入查询条件!");myform.sel_key.focus();return false;
}
}
</script>
<body> 
<TABLE width="757" cellPadding=0 cellSpacing=0 style="WIDTH: 755px" align="center"> 
  <TBODY> 
    <TR> 
      <TD style="VERTICAL-ALIGN: bottom; HEIGHT: 6px" colSpan=3> <TABLE 
      style="BACKGROUND-IMAGE: url(images/f_head.jpg); WIDTH: 760px; HEIGHT: 154px" 
      cellSpacing=0 cellPadding=0> 
          <TBODY> 
            <TR> 
              <TD height="110" colspan="6" 
          style="VERTICAL-ALIGN: text-top; WIDTH: 80px; HEIGHT: 115px; TEXT-ALIGN: right"></TD> 
            </TR> 
            <TR> 
              <TD height="29" align="center" valign="middle"> <TABLE width="237"  align="center" cellPadding=0 cellSpacing=0>
                  <TBODY> 
                    <TR align="center" valign="middle"> 
                      <TD width="121" height="20"  style="COLOR: red;"><img src="images/fig_02.gif" width="22" height="16">&nbsp;&nbsp;<a href="index.php">发表文章</a></TD> 
                      <TD width="113"  style=" COLOR: red;"><img src="images/fig_02.gif" width="22" height="16">&nbsp;<a href="query.php">查询文章</a></TD>
                    </TR> 
                  </TBODY> 
                </TABLE></TD> 
            </TR> 
          </TBODY> 
        </TABLE></TD> 
    </TR> 
    <TR> 
	<td background="images/top.jpg">&nbsp;
	</td>
    </TR>
    <TR>
      <td height="177" align="center" background="images/center.jpg"><table width="600" height="247"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="32" align="center" valign="middle"><table width="480" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td>
                  <form  name="myform" method="post" action="">
                    <table width="560" border="1" cellpadding="3" cellspacing="1" bordercolor="#D6E7A5">
                      <tr>
                        <td width="100%" height="28" align="center" class="i_table">查询条件：
                            <select name="sel_tj" id="sel_tj">
                              <option value="title" selected>博客主题</option>
                              <option value="author">作者</option>
                            </select>
                    关键字
                    <input name="sel_key" type="text" id="sel_key" size="30">
&nbsp;
                    <input type="submit" name="Submit" value="检索" onClick="return check();"></td>
                      </tr>
                    </table>
                </form></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td height="213" align="center" valign="top">
            <?php
				  if ($_POST["Submit"]=="检索"){
				  	 $tj=$_POST[sel_tj];
					 $key=$_POST[sel_key];
					 $sql=mysql_query("select * from tb_article where $tj like '%$key%'");
					 $result=mysql_fetch_array($sql);
					 $_SESSION[file_id]=$result[id];
				  if($result==false){
				  	echo ("[<font color=red>对不起，您检索的博客信息不存在!</font>]");
				  }
				  else{
				 ?>
            <table width="560" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF">
              <tr align="left" colspan="2" >
                <td width="390" height="25" colspan="3" valign="top" bgcolor="#CEEB6B"> <img src="images/fig_03.gif" width="18" height="22"><span class="tableBorder_LTR"> 博客文章</span> </td>
              </tr>
        <td align="center" valign="top" ><table width="480" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="100" valign="top">
                  <?php 
							  do{
							  ?>
                  <table width="100%"  border="1" cellpadding="1" cellspacing="1" bordercolor="#D6E7A5" bgcolor="#FFFFFF" class="i_table">
                    <tr bgcolor="#FFFFFF">
                      <td width="14%" align="center">博客ID号</td>
                      <td width="15%"><?php echo $result[id]; ?></td>
                      <td width="11%" align="center">作 者</td>
                      <td width="18%"><?php echo $result[author]; ?></td>
                      <td width="12%" align="center">发表时间</td>
                      <td width="30%"><?php echo $result[now]; ?></td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                      <td align="center">博客主题</td>
                      <td colspan="5">&nbsp;&nbsp;<?php echo $result[title]; ?></td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                      <td align="center">文章内容</td>
                      <td colspan="5"><?php echo $result[content]; ?></td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                      <td colspan="3" align="center"><a href="comment.php">发表评论</a></td>
                      <td colspan="3" align="center">
                        <img src="images/A_delete.gif" width="52" height="16" alt="删除博客文章" onClick="window.location.href='del_file.php?file_id=<?php echo $result[id];?>'">
                      </td>
                    </tr>
                  </table>
                  <?php  
							}while($result=mysql_fetch_array($sql))
						 ?></td>
              </tr>
          </table></td>
            </table>
            <?php
						}
				 	 }
			        ?></td>
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
        2006
        明日科技开发</TD> 
    </TR> 
  </TBODY> 
</TABLE> 
</body>
</html>
