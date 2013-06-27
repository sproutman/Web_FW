<?php
session_start();
if($_SESSION[user]=="")
{
 echo "<script>alert('请不要非法登录本站！');history.back();</script>";
 exit;
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>邮件收发系统</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<script language="javascript">
 function chkinput(form)
  {
    if(form.info.value=="")
	 {
	   alert("请输入发件人或邮件主题!");
	   form.info.select();
	   return(false);
	 
	 }
   return(true);
  }
</script>
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
    <td width="660" height="20" valign="top" bgcolor="E9E8E8"><table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="20" bgcolor="#66CCFF"><div align="center">查找邮件</div></td>
      </tr>
      <tr>
        <td   bgcolor="#66CCFF"><table width="650" border="0" align="center" cellpadding="0" cellspacing="1">
          <tr>
            <td height="25" colspan="4" bgcolor="#E9E8E8"><div align="center">
              <table width="650" height="25" border="0" cellpadding="0" cellspacing="0">
			  <form name="form1" method="post" action="<?php echo $PHP_SELF;?>" onSubmit="return chkinput(this)">
                <tr>
                  <td width="143"><div align="right">查找邮件:</div></td>
                  <td width="92">
				  <div align="center">
                    <select name="findtype" class="inputcss">
                      <option selected value=1>邮件主题</option>
                      <option value=0>发件人</option>
                    </select>
                  </div></td>
                  <td width="191">
				  <div align="center">
				  <input type="text" name="info" size="30" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
				  </div></td>
                  <td width="224">
				  <div align="left">
				  &nbsp;&nbsp;<input type="submit" value="开始" class="buttoncss" name="submit">
				  </div></td>
                </tr>
				</form>
              </table>
            </div></td>
          </tr>
		 
		  <?php
		   if($_POST[submit]!="")
		    {
		 ?>
		    <tr>
            <td width="188" height="20" bgcolor="#E9E8E8"><div align="center">主题</div></td>
            <td width="153" height="20" bgcolor="#E9E8E8"><div align="center">发件人</div></td>
            <td width="209" height="20" bgcolor="#E9E8E8"><div align="center">时间</div></td>
            <td width="97" height="20" bgcolor="#E9E8E8"><div align="center">大小</div></td>
          </tr>
		 <?php
			  include("mailclass.php");
              $rec=new pop3($_SESSION[host],110,10);
              $rec->open();
              $rec->login($_SESSION[user],$_SESSION[pass]);
              $rec->stat();
              $rec->listmail();
			  if($_POST[findtype]==1)
			   {
			      $sum=0;
			      for($i=1;$i<=$rec->messages;$i++)
				   {
				        $rec->getmail($i); 
						for($j=0;$j<count($rec->head);$j++)
				          { if(substr($rec->head[$j],0,7)=="Subject")
				            {
				             $head1=substr(htmlspecialchars($rec->head[$j]),8,strlen(trim(htmlspecialchars($rec->head[$j])))-8);
				            }
				           }
				     if(preg_match("/$_POST[info]/i",trim($head1)))		   	
					   {  
					      $sum++;
			?>
		 
		   <tr>
            <td height="20" bgcolor="#E9E8E8">
			<div align="left">
			<a href="readmail.php?mailid=<?php echo $i;?>">
			<?php
				
			     for($j=0;$j<count($rec->head);$j++)
				 { if(substr($rec->head[$j],0,7)=="Subject")
				   {
				     echo substr(htmlspecialchars($rec->head[$j]),8,strlen(trim(htmlspecialchars($rec->head[$j])))-8)."<br>\n";
				   }
				 }	
				?>
			</a>			</div></td>
            <td height="20" bgcolor="#E9E8E8">
			<div align="center">
			  <?php
				 for($j=0;$j<count($rec->head);$j++)
				 { if(substr($rec->head[$j],0,4)=="From")
				   {
				     echo substr(htmlspecialchars($rec->head[$j]),5,strlen(trim(htmlspecialchars($rec->head[$j])))-5)."<br>\n";
				   }
				 }	
				?>
			</div></td>
            <td height="20" bgcolor="#E9E8E8">
			<div align="center">
			  <?php
				 for($j=0;$j<count($rec->head);$j++)
				 { if(substr($rec->head[$j],0,4)=="Date")
				   {
				     echo substr(htmlspecialchars($rec->head[$j]),5,strlen(trim(htmlspecialchars($rec->head[$j])))-10)."<br>\n";
				   }
				 }	
				?>
			</div></td>
            <td height="20" bgcolor="#E9E8E8">
			<div align="center">
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
					   
					   }
				     $rec->head=NULL;
				   }
				 if($sum==0)
				  {
				?>
		  <tr>
            <td height="20" colspan="4" bgcolor="#E9E8E8"><div align="center">对不起,没有查找到您要找的邮件!</div></td>
          </tr>
				
				<?php  
				  
				  
				  }   
			   
			   }
			 elseif($_POST[findtype]==0)
			   {
			   $sum=0;
			      for($i=1;$i<=$rec->messages;$i++)
				   {
				        $rec->getmail($i);
						for($j=0;$j<count($rec->head);$j++)
				          { if(substr($rec->head[$j],0,4)=="From")
				            {
				             $head1=substr(htmlspecialchars($rec->head[$j]),5,strlen(trim(htmlspecialchars($rec->head[$j])))-5);
				            }
				           }	
				    if(trim($head1)==trim($_POST[info]))
					   {  
					      $sum++;
			?>
		  
		   <tr>
            <td height="20" bgcolor="#E9E8E8"><div align="left">
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
            <td height="20" bgcolor="#E9E8E8"><div align="center">
              <?php
				 for($j=0;$j<count($rec->head);$j++)
				 { if(substr($rec->head[$j],0,4)=="From")
				   {
				     echo substr(htmlspecialchars($rec->head[$j]),5,strlen(trim(htmlspecialchars($rec->head[$j])))-5)."<br>\n";
				   }
				 }	
				?>
            </div></td>
            <td height="20" bgcolor="#E9E8E8"><div align="center">
              <?php
				 for($j=0;$j<count($rec->head);$j++)
				 { if(substr($rec->head[$j],0,4)=="Date")
				   {
				     echo substr(htmlspecialchars($rec->head[$j]),5,strlen(trim(htmlspecialchars($rec->head[$j])))-10)."<br>\n";
				   }
				 }	
				?>
            </div></td>
            <td height="2" bgcolor="#E9E8E8"><div align="center">
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
					   
					   }
				    $rec->head=NULL;
				   }
				 if($sum==0)
				  {
				?>
		  <tr>
            <td height="20" colspan="4" bgcolor="#E9E8E8"><div align="center">对不起,没有查找到您要找的邮件!</div></td>
          </tr>
				
				<?php  
				  
				  
				  }   
			     
			   }
			   
		   ?>
        
		  <?php
		   }
		  ?>
        </table></td>
      </tr>
    </table>      
  </td>
  </tr>
</table>
<?php
 include("bottom.php");
?>
