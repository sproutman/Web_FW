<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>操作带密码的Access数据库</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>
<body topmargin="0" bottommargin="0" leftmargin="0">
<table width="617" height="122" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="612" height="40"><img src="images/banner.gif" width="617" height="122"></td>
  </tr>
</table>
<table width="612" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="40" colspan="3" bgcolor="#666666">
	<table width="616" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr bgcolor="#999999">
        <td width="259" height="20"><div align="center" class="STYLE1">书名</div></td>
        <td width="108"><div align="center" class="STYLE1">出版社</div></td>
        <td width="89"><div align="center" class="STYLE1">出版时间</div></td>
        <td width="88"><div align="center" class="STYLE1">页数</div></td>
        <td width="66"><div align="center" class="STYLE1">价格</div></td>
      </tr>
	  <?php
	   include("conn/conn.php");
	   $sql="select * from tb_bookinfo order by pdate desc";
	   $rs=new com("adodb.recordset");
	   $rs->open($sql,$conn,1,3);
	   $rs->pagesize=10;
	   if((trim(intval($_GET[page]))=="")||(intval($_GET[page])>$rs->pagecount)||(intval($_GET[page])<=0))
	    {
		  $page=1;
		}
	   else
		{
		  $page=intval($_GET[page]); 
		}
	    
	   if($rs->eof || $rs->bof)
	    {
	?>
	<tr>
        <td height="20" colspan="5" bgcolor="#FFFFFF"><div align="center">本站暂无图书信息！</div></td>
        </tr>
	
	<?php
		}
	   else
		{		
		
		 $rs->absolutepage=$page;
		 $mypagesize=$rs->pagesize;
		 while(!$rs->eof && $mypagesize>0)
		  {
	  ?>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="left">&nbsp;
          <?php $fields=$rs->fields(bookname);echo $fields->value;?></div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><?php $fields=$rs->fields(tpi);echo $fields->value;?></div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><?php $fields=$rs->fields(pdate);echo $fields->value;?></div></td>
        <td height="20" align="center" bgcolor="#FFFFFF"><?php $fields=$rs->fields(bookpage);echo $fields->value;?>&nbsp;页</td>
        <td height="20" align="center" bgcolor="#FFFFFF"><?php $fields=$rs->fields(price);echo $fields->value;?>&nbsp;元</td>
      </tr>
	  <?php
	      $mypagesize--;
		  $rs->movenext;
	     }
	   }
	  ?>
    </table></td>
  </tr>
  <tr>
    <td width="283" height="25">
	<div align="left">
    本站共有图书<?php echo $rs->recordcount;?>种&nbsp;每页显示<?php echo $rs->pagesize;?>种&nbsp;第<?php echo $page;?>页/共<?php echo $rs->pagecount;?>页	</div></td>
    <td width="263">
	<div align="right">	
	<?php
   if($page>=2)
	{
?>
  <a href="index.php?page=1" title="首页"><font face="webdings"> 9 </font></a> 
  <a href="index.php?page=<?php echo $page-1;?>" title="前一页"><font face="webdings"> 7 </font></a>
<?php
    }
   if($rs->pagecount<=4)
     {
		for($i=1;$i<=$rs->pagecount;$i++)
		{
?>
        <a href="index.php?page=<?php echo $i;?>"><?php echo $i;?></a>
<?php
		 }
	  }
	else
	  {
		 for($i=1;$i<=4;$i++)
		  {	 
?>
          <a href="index.php?page=<?php echo $i;?>"><?php echo $i;?></a>
<?php 
          }
?>
        <a href="index.php?page=<?php 
		 if($rs->pagecount>=$page+1)
		   echo $page+1;
		  else
		   echo 1; 
		 
		 ?>" title="后一页"><font face="webdings"> 8 </font></a> 
		<a href="index.php?page=<?php echo $rs->pagecount;?>" title="尾页"><font face="webdings"> : </font></a>
  <?php 
          }
  ?>
	</div>
	</td>
    <td width="70"><table width="70" border="0" cellpadding="0" cellspacing="0">
      <form name="form1" method="get" action="index.php">
        <tr>
          <td width="30"><div align="center">
            <input type="text" name="page" size="2" class="inputcss">
          </div></td>
          <td width="40"><div align="center">
            <input name="submit" type="submit" class="buttoncss" value="GO">
          </div></td>
        </tr>
      </form>
    </table></td>
  </tr>
</table>
</body>
</html>
