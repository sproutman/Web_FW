<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��Ʒ��ҳ��ʾ</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
.STYLE2 {
	font-size: 16px;
	font-weight: bold;
	color: #FFFFFF;
}
-->
</style>
</head>
<body topmargin="0" bottommargin="0" leftmargin="0">
<table width="800" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="40" bgcolor="#0099CC"><div align="left" class="STYLE2">&nbsp;&nbsp;&nbsp;&nbsp;���տƼ�����ͼ��</div></td>
  </tr>
</table>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="40" colspan="3" bgcolor="#666666"><table width="800" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr bgcolor="#999999">
        <td width="291" height="20"><div align="center" class="STYLE1">����</div></td>
        <td width="156"><div align="center" class="STYLE1">������</div></td>
        <td width="136"><div align="center" class="STYLE1">����ʱ��</div></td>
        <td width="122"><div align="center" class="STYLE1">ҳ��</div></td>
        <td width="89"><div align="center" class="STYLE1">�۸�</div></td>
      </tr>
	  <?php
	   include("conn.php");
	   $sql="select * from tb_bookinfo order by pdate desc";
	   $rs=new com("adodb.recordset");
	   $rs->open($sql,$conn,1,3);
	   $rs->pagesize=20;
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
        <td height="20" colspan="5" bgcolor="#FFFFFF"><div align="center">��վ������Ʒ��</div></td>
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
        <td height="20" bgcolor="#FFFFFF"><div align="left"><?php $fields=$rs->fields(bookname);echo $fields->value;?></div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><?php $fields=$rs->fields(tpi);echo $fields->value;?></div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><?php $fields=$rs->fields(pdate);echo $fields->value;?></div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="right"><?php $fields=$rs->fields(bookpage);echo $fields->value;?>&nbsp;ҳ</div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="right"><?php $fields=$rs->fields(price);echo $fields->value;?>&nbsp;Ԫ</div></td>
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
    <td width="345" height="25">
	<div align="left">
    ��վ����ͼ��<?php echo $rs->recordcount;?>��&nbsp;ÿҳ��ʾ<?php echo $rs->pagesize;?>��&nbsp;��<?php echo $page;?>ҳ/��<?php echo $rs->pagecount;?>ҳ	</div></td>
    <td width="385">
	<div align="right">	
	<?php
   if($page>=2)
	{
?>
  <a href="index.php?page=1" title="��ҳ"><font face="webdings"> 9 </font></a> 
  <a href="index.php?page=<?php echo $page-1;?>" title="ǰһҳ"><font face="webdings"> 7 </font></a>
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
		 
		 ?>" title="��һҳ"><font face="webdings"> 8 </font></a> 
		<a href="index.php?page=<?php echo $rs->pagecount;?>" title="βҳ"><font face="webdings"> : </font></a>
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
<table width="800" height="00" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"><hr width="650" color="#990000" ></div></td>
  </tr>
</table>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="60"><div align="center">
      ��Ȩ����&nbsp;<a href="http://www.mingrisoft.com/about.asp">����ʡ���տƼ����޹�˾</a>! δ����Ȩ��ֹ���ƻ�������!<br>
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp">www.mingrisoft.com</a>, All Rights Reserved! 2006<br>
      <br>
      �������ڴ���1024*768�ķֱ�����ʹ��</div></td>
  </tr>
</table>
</body>
</html>
