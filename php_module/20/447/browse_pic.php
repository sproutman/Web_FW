<?php session_start(); include "conn/conn.php"; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="css/style.css" rel="stylesheet">
<title>浏览图片</title>
<style type="text/css">
<!--
.style1 {font-size: 12pt}
-->
</style>
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
              <TD height="110" colspan="6" 
          style="VERTICAL-ALIGN: text-top; WIDTH: 80px; HEIGHT: 115px; TEXT-ALIGN: right"></TD> 
            </TR> 
            <TR> 
              <TD height="29" align="center" valign="middle"> <TABLE width="300" align="center" cellPadding=0 cellSpacing=0 style="WIDTH: 300px" VERTICAL-ALIGN: text-top;> 
                  <TBODY> 
                    <TR align="center" valign="middle"> 
                      <TD width="127" height="21" style="WIDTH: 80px; COLOR: red;"><img src="images/fig_02.gif" width="22" height="16">&nbsp;&nbsp;<a href="index.php">添加图片</a></TD> 
                      <TD width="241" style="WIDTH: 80px; COLOR: red;"><img src="images/fig_02.gif" width="22" height="16">&nbsp;<a href="browse_pic.php">&nbsp;浏览图片</a></TD> 
                      <TD width="210" style="WIDTH: 90px; COLOR: red;"><img src="images/fig_02.gif" width="22" height="16"> <a href="query_pic.php" class='navlink' style="CURSOR:hand">&nbsp;&nbsp;查询图片</a></TD> 
                    </TR> 
                  </TBODY> 
                </TABLE></TD> 
            </TR> 
          </TBODY> 
        </TABLE></TD> 
    <TR> 
      <td height="8" background="images/top.jpg" >&nbsp;</td> 
    </TR> 
    <TR> 
      <td height="191" align="center" background="images/center.jpg" ><table width="640"  border="0" cellpadding="0" cellspacing="0"> 
          <tr> 
            <td width="613" height="375" align="center" valign="top" bordercolor="#D6E7A5"> <table width="600" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF"> 
                <tr align="left" colspan="2" > 
                  <td width="390" height="25" colspan="3" valign="top" bgcolor="#CEEB6B"> <img src="images/fig_03.gif" width="18" height="22"><span class="tableBorder_LTR"> 浏览图片</span> </td> 
                </tr> 
                <td height="320" align="center" valign="top" ><?php
	if($_GET[page]=="" || is_numeric($_GET[page]==false))
	  {
	    $page=1;
	  }
	 else
	  {
	   $page=$_GET[page];
	  } 	
	    $page_size=4;     //每页显示4张图片
	    $query="select count(*) as total from tb_tpsc order by scsj desc";   
		$result=mysql_query($query);       //查询总的记录条数
		$message_count=mysql_result($result,0,"total");       //为变量赋值
		if($message_count==0)
		 {
		  echo "暂无图片！";
		 }
		 else
		  {
		    if($message_count<$page_size)
			 {
			   $page_count=1;
			 }
			 else
			  {
			    if($message_count%$page_size==0)
				 {
				   $page_count=$message_count/$page_size;	
				 }
				 else
				  {
				    $page_count=ceil($message_count/$page_size);	
				  }
		       }
	 	    $offset=($page-1)*$page_size;
			$query="select * from tb_tpsc where scsj order by id desc limit $offset, $page_size";			
			$result=mysql_query($query);
		?> 
                    <table width="496" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#D6D7D6"> 
                      <tr> 
                        <?php
		   $i=1;
		   while($info=mysql_fetch_array($result))
		   {  
		     if($i%2==0)
		       {
		 ?> 
                        <td width="500" height="145"><table width="262" height="137" border="0" cellpadding="0" cellspacing="0"> 
                            <tr> 
                              <td height="112"colspan="2"><div align="center"><img src="image.php?recid=<?php echo $info[id];?>" width="200" height="100"></div></td> 
                            </tr> 
                            <tr> 
                              <td width="119" height="25" align="left">&nbsp;图片名称:<?php echo $info[tpmc];?></td> 
                              <td width="143">上传时间:<?php echo $info[scsj];?></td> 
                            </tr> 
                          </table></td> 
                      </tr> 
                      <?php
		    }
			else
			{
		   ?> 
                      <td width="500" height="144"><table width="261" height="135" border="0" cellpadding="0" cellspacing="0"> 
                            <tr> 
                              <td height="110" colspan="2"><div align="center"><img src="image.php?recid=<?php echo $info[id];?>" width="200" height="100"></div></td> 
                            </tr> 
                            <tr> 
                              <td width="124" height="25">&nbsp;图片名称:<?php echo $info[tpmc];?></td> 
                              <td width="137">上传时间:&nbsp;<?php echo $info[scsj];?></td> 
                            </tr> 
                          </table></td> 
                        <?php
		      }
		     $i++;
			} 
		   ?> 
                      </tr> </table></td> 
              </table> 
              <table width="600" border="0" align="center" cellpadding="0" cellspacing="0"> 
                <tr> 
                  <td>&nbsp;&nbsp;页次：<?php echo $page;?>/<?php echo $page_count;?>页 记录：<?php echo $message_count;?> 条&nbsp;</td> 
                  <td align="right" class="hongse01"> <?php
				  if($page!=1)
				   {
				     echo  "<a href=browse_pic.php?page=1>首页</a>&nbsp;";
					 echo "<a href=browse_pic.php?page=".($page-1).">上一页</a>&nbsp;";
				   }
				  if($page<$page_count)
				   {
				        echo "<a href=browse_pic.php?page=".($page+1).">下一页</a>&nbsp;";
				        echo  "<a href=browse_pic.php?page=".$page_count.">尾页</a>";
				   }
				 } 
				?> </td> 
                </tr> 
              </table></td> 
          </tr> 
        </table></td> 
    </TR> 
    <TR> 
      <td height="16" background="images/bottom.jpg" >&nbsp;</td> 
    </TR> 
    <TR> 
      <TD height="82" colSpan=3 align="center" background="images/footer.jpg"> 欢迎访问博客网 请使用IE 6.0 在1024×768分辨率下浏览本网站<BR> 
        CopyRight@ 2007 明日科技开发</TD> 
    </TR> 
  </TBODY> 
</TABLE> 
</body>
</html>
