<?php session_start(); include "conn/conn.php"; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="css/style.css" rel="stylesheet">
<title>���ͼƬ</title>
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
                      <TD width="127" height="21" style="WIDTH: 80px; COLOR: red;"><img src="images/fig_02.gif" width="22" height="16">&nbsp;&nbsp;<a href="index.php">���ͼƬ</a></TD> 
                      <TD width="241" style="WIDTH: 80px; COLOR: red;"><img src="images/fig_02.gif" width="22" height="16">&nbsp;<a href="browse_pic.php">&nbsp;���ͼƬ</a></TD> 
                      <TD width="210" style="WIDTH: 90px; COLOR: red;"><img src="images/fig_02.gif" width="22" height="16"> <a href="query_pic.php" class='navlink' style="CURSOR:hand">&nbsp;&nbsp;��ѯͼƬ</a></TD> 
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
                  <td width="390" height="25" colspan="3" valign="top" bgcolor="#CEEB6B"> <img src="images/fig_03.gif" width="18" height="22"><span class="tableBorder_LTR"> ���ͼƬ</span> </td> 
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
	    $page_size=4;     //ÿҳ��ʾ4��ͼƬ
	    $query="select count(*) as total from tb_tpsc order by scsj desc";   
		$result=mysql_query($query);       //��ѯ�ܵļ�¼����
		$message_count=mysql_result($result,0,"total");       //Ϊ������ֵ
		if($message_count==0)
		 {
		  echo "����ͼƬ��";
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
                              <td width="119" height="25" align="left">&nbsp;ͼƬ����:<?php echo $info[tpmc];?></td> 
                              <td width="143">�ϴ�ʱ��:<?php echo $info[scsj];?></td> 
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
                              <td width="124" height="25">&nbsp;ͼƬ����:<?php echo $info[tpmc];?></td> 
                              <td width="137">�ϴ�ʱ��:&nbsp;<?php echo $info[scsj];?></td> 
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
                  <td>&nbsp;&nbsp;ҳ�Σ�<?php echo $page;?>/<?php echo $page_count;?>ҳ ��¼��<?php echo $message_count;?> ��&nbsp;</td> 
                  <td align="right" class="hongse01"> <?php
				  if($page!=1)
				   {
				     echo  "<a href=browse_pic.php?page=1>��ҳ</a>&nbsp;";
					 echo "<a href=browse_pic.php?page=".($page-1).">��һҳ</a>&nbsp;";
				   }
				  if($page<$page_count)
				   {
				        echo "<a href=browse_pic.php?page=".($page+1).">��һҳ</a>&nbsp;";
				        echo  "<a href=browse_pic.php?page=".$page_count.">βҳ</a>";
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
      <TD height="82" colSpan=3 align="center" background="images/footer.jpg"> ��ӭ���ʲ����� ��ʹ��IE 6.0 ��1024��768�ֱ������������վ<BR> 
        CopyRight@ 2007 ���տƼ�����</TD> 
    </TR> 
  </TBODY> 
</TABLE> 
</body>
</html>
