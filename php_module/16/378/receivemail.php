<?php
session_start();
if($_SESSION[user]=="")
{
 echo "<script>alert('请不要非法登录本站！');history.back();</script>";
 exit;
}
include("mailclass.php");
 $rec=new pop3($_SESSION[host],110,10);
 $rec->open();
 $rec->login($_SESSION[user],$_SESSION[pass]);
 $rec->stat();
 $rec->listmail();
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>邮件收发系统</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar">
<?php
  include("top.php");
?>
<table width="800"  border="00" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="140" height="480" valign="top" bgcolor="#0099CC">
	<?php
	include("left.php");
	?>
	</td>
    <td width="660" bgcolor="E9E8E8" valign="top">
	<?php
	 if($rec->messages<=0)
	  {
	?>
	  <table width="650" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td bgcolor="#66CCFF"><div align="center">您的收件箱内无邮件！</div></td>
        </tr>
      </table>
	 <?php
	  }
	  else
	  {
	 ?> 
	
	<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="20" bgcolor="#66CCFF"><div align="center">收件箱</div></td>
      </tr>
      <tr>
          <td height="40"  bgcolor="#66CCFF"><table width="650" height="40" border="0" cellpadding="0" cellspacing="1">
              <tr> 
                <td height="20" colspan="2" bgcolor="E9E8E8"><div align="center">主题</div></td>
                <td width="136" bgcolor="E9E8E8"><div align="center">发件人</div></td>
                <td width="183" bgcolor="E9E8E8"><div align="center">时间</div></td>
                <td width="95" bgcolor="E9E8E8"><div align="center">大小</div></td>
              </tr>
			 <?php
			  
			 
			 for($i=1;$i<=$rec->messages;$i++)
			 { 
			     $rec->getmail($i);
				 
			 ?> 
              <tr> 
			   <td width="43" height="20" bgcolor="E9E8E8">
				<div align="center">
				 <a href="deletemail.php?del=<?php echo $i;?>"><img src="images/drop.png" border="0"></a>  
				</div>
				</td>
			   <td width="187" bgcolor="E9E8E8"><div align="left">
				<a href="readmail.php?mailid=<?php echo $i;?>">
				<?php
				
			     for($j=0;$j<count($rec->head);$j++)
				 { if(substr($rec->head[$j],0,7)=="Subject")
				   {
				     echo substr(htmlspecialchars($rec->head[$j]),8,strlen(trim(htmlspecialchars($rec->head[$j])))-8)."<br>\n";
				   }
				 }	
				?>
				</a>
                </div></td>
                <td height="20" bgcolor="E9E8E8"><div align="center">
                  <?php
				 for($j=0;$j<count($rec->head);$j++)
				 { if(substr($rec->head[$j],0,4)=="From")
				   {
				     echo substr(htmlspecialchars($rec->head[$j]),5,strlen(trim(htmlspecialchars($rec->head[$j])))-5)."<br>\n";
				   }
				 }	
				?>
                </div></td>
                <td height="20" bgcolor="E9E8E8"><div align="center">
                  <?php
				 for($j=0;$j<count($rec->head);$j++)
				 { if(substr($rec->head[$j],0,4)=="Date")
				   {
				     echo substr(htmlspecialchars($rec->head[$j]),5,strlen(trim(htmlspecialchars($rec->head[$j])))-10)."<br>\n";
				   }
				 }	
				?>
                </div></td>
                <td height="20" bgcolor="E9E8E8"><div align="center">
				<?php
				
				  $size=$rec->mail_list[$i][size];
				  if($size>=1024)
				  {
				    echo substr(($size/1024),0,4)."M";
				  
				  }
				  elseif($size>1024*1024)
				  {
				    echo substr(($size/(1024*1024)),0,4)."G";
				  }
				  elseif($size<1024)
				  {
				    echo ($size)."KB";
				  }
				  
				?>
				
				</div></td>
              </tr>
			  <?php
			    $rec->head=NULL;
			  }
			  ?>
            </table> </td>
      </tr>
    </table>      
      <table width="650" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="114"></td>
          <td width="536"><div align="right">
		  您的邮箱中共有邮件:&nbsp;<?php echo $rec->messages;?>&nbsp;封
		  占用空间:
		  <?php
		        $totalsize=$rec->size;
			    if($totalsize>=1024)
				  {
				    echo substr(($totalsize/1024),0,4)."M";
				  
				  }
				  elseif($totalsize>1024*1024)
				  {
				    echo substr(($totalsize/(1024*1024)),0,4)."G";
				  }
				  elseif($totalsize<1024)
				  {
				    echo ($totalsize)."KB";
				  }
				  
		  ?>
		  &nbsp;</div></td>
        </tr>
      </table>
	
	  <?php
	   $rec->close();
	  }
	  ?>
    </td>
  </tr>
</table>
<?php
 include("bottom.php");
?>