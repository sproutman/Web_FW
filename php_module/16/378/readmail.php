<?php
session_start();
if($_SESSION[user]=="")
{
 echo "<script>alert('请不要非法登录本站！');history.back();</script>";
 exit;
}
$mailid=$_GET[mailid];
include("mailclass.php");

 $rec=new pop3($_SESSION[host],110,10);
 $rec->open();
 $rec->login($_SESSION[user],$_SESSION[pass]);
 $rec->stat();
 $rec->listmail();
 $rec->getmail($mailid);
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
    <td width="660" bgcolor="E9E8E8" valign="top"><table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="20" bgcolor="#66CCFF"><div align="center">查看邮件</div></td>
      </tr>
      <tr>
        <td height="241"  bgcolor="#66CCFF"><table width="650" border="0" align="center" cellpadding="0" cellspacing="1">
          <tr>
            <td width="127" height="25" bgcolor="#CCCCCC"><div align="center">发件人:</div></td>
            <td colspan="3" bgcolor="#E9E8E8">
			<div align="left">
			  <?php
				 for($j=0;$j<count($rec->head);$j++)
				 { if(substr($rec->head[$j],0,4)=="From")
				   {
				     echo substr(htmlspecialchars($rec->head[$j]),5,strlen(trim(htmlspecialchars($rec->head[$j])))-5)."<br>\n";
				   }
				 }	
				?>
			</div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#CCCCCC">
			<div align="center">收件人:</div></td>
            <td height="20" colspan="3" bgcolor="#E9E8E8">
			<div align="left">
			 <?php
			  echo $_SESSION[user];
			 ?>
			</div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#CCCCCC"><div align="center">邮件主题:</div></td>
            <td height="20" colspan="3" bgcolor="#E9E8E8">
			<div align="left">
			   <?php
				
			     for($j=0;$j<count($rec->head);$j++)
				 { if(substr($rec->head[$j],0,7)=="Subject")
				   {
				     echo substr(htmlspecialchars($rec->head[$j]),8,strlen(trim(htmlspecialchars($rec->head[$j])))-8)."<br>\n";
				   }
				 }	
				?>
			</div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#CCCCCC"><div align="center">发件时间:</div></td>
            <td height="20" colspan="3" bgcolor="#E9E8E8">
			<div align="left">
			<?php
				 for($j=0;$j<count($rec->head);$j++)
				 { if(substr($rec->head[$j],0,4)=="Date")
				   {
				     echo substr(htmlspecialchars($rec->head[$j]),5,strlen(trim(htmlspecialchars($rec->head[$j])))-10)."<br>\n";
				   }
				 }	
				?>
			</div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#cccccc"><div align="center">邮件大小:</div></td>
            <td width="278" height="20" bgcolor="#E9E8E8">
			<div align="left">
			<?php
				
				  $size=$rec->mail_list[$mailid][size];
				  if($size>=1024)
				  {
				    echo ($size/1024)."M";
				  
				  }
				  elseif($size>1024*1024)
				  {
				    echo ($size/(1024*1024))."G";
				  }
				  elseif($size<1024)
				  {
				    echo ($size)."KB";
				  }
				  
				?>
			</div></td>
            <td width="127" bgcolor="#CCCCCC"><div align="center">操作:</div></td>
            <td width="113" bgcolor="#E9E8E8">
			<div align="center">
			<input type="button" value="删除" class="buttoncss" onClick="javascript:window.location='deletemail.php?del=<?php echo $mailid;?>'">
			</div></td>
          </tr>
          <tr>
            <td height="325" colspan="4" bgcolor="#E9E8E8" valign="top">
			<DIV style="BORDER-RIGHT: #aaaaaa 1px solid; BORDER-TOP: #aaaaaa 1px solid; OVERFLOW-Y: scroll; BORDER-LEFT: #aaaaaa 1px solid; WIDTH: 100%; SCROLLBAR-SHADOW-COLOR: #fcced9; SCROLLBAR-ARROW-COLOR: #fcced9; BORDER-BOTTOM: #aaaaaa 1px solid; SCROLLBAR-BASE-COLOR: #fcced9; HEIGHT: 325px">
            
            <?php
			 for($i=0;$i<count($rec->body);$i++)
			  {
			   echo ($rec->body[$i])."<br>\n";
			  
			  }
			
			
			?>
			</div></td>
          </tr>
        </table></td>
      </tr>
    </table>      
  </td>
  </tr>
</table>
<?php
 include("bottom.php");
?>
