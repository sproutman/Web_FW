<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ͨ��ADO��ʽʵ��ָ��ʱ��ε���Ϣ����</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>
<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#666688"><table width="200" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td><img src="images/banner.gif" width="753" height="75" /></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="754" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<?php
  include("conn.php");
	   $sql="select * from tb_bbs order by pubtime desc";
	   $rs=new com("adodb.recordset");
	   $rs->open($sql,$conn,1,1);
	   $rs->pagesize=5;
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
		    echo "��������";
		  }
	     else
		{		
		
		 $rs->absolutepage=$page;
		 $mypagesize=$rs->pagesize;
?>
<table width="753" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#666688"><table width="753" height="50" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td width="325" height="25" bgcolor="#CCCCD4"><div align="center">����</div></td>
        <td width="188" bgcolor="#CCCCD4"><div align="center">����ʱ��</div></td>
        <td width="126" bgcolor="#CCCCD4"><div align="center">������</div></td>
        <td width="109" bgcolor="#CCCCD4"><div align="center">�������</div></td>
      </tr>
	  <?php
	     while(!$rs->eof && $mypagesize>0)
		  {
	  ?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><?php $fields=$rs->fields(title);echo $fields->value;?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php $fields=$rs->fields(pubtime);echo $fields->value;?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php $fields=$rs->fields(pubuser);echo $fields->value;?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php $fields=$rs->fields(click);echo $fields->value;?></div></td>
      </tr>
	    <?php
	      $mypagesize--;
		  $rs->movenext;
	     }
	   }
	  ?>
    </table></td>
  </tr>
</table>
<table width="754" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="338" height="25"><div align="left"> ��������<?php echo $rs->recordcount;?>��&nbsp;ÿҳ��ʾ<?php echo $rs->pagesize;?>��&nbsp;��<?php echo $page;?>ҳ/��<?php echo $rs->pagecount;?>ҳ </div></td>
    <td width="345"><div align="right">
      <?php
   if($page>=2)
	{
?>
      <a href="index.php?page=1" title="��ҳ"><font face="webdings"> 9 </font></a> <a href="index.php?page=<?php echo $page-1;?>" title="ǰһҳ"><font face="webdings"> 7 </font></a>
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
		 
		 ?>" title="��һҳ"><font face="webdings"> 8 </font></a> <a href="index.php?page=<?php echo $rs->pagecount;?>" title="βҳ"><font face="webdings"> : </font></a>
      <?php 
          }
  ?>
    </div></td>
    <td width="71"><table width="70" border="0" cellpadding="0" cellspacing="0">
      <form action="index.php" method="get" name="form1" id="form1">
        <tr>
          <td width="30"><div align="center">
            <input type="text" name="page" size="2" class="inputcss" />
          </div></td>
          <td width="40"><div align="center">
            <input name="submit" type="submit" class="buttoncss" value="GO" />
          </div></td>
        </tr>
      </form>
    </table></td>
  </tr>
</table>
<?php


?>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="60"><div align="center"> ��Ȩ����&nbsp;<a href="http://www.mingrisoft.com/about.asp">����ʡ���տƼ����޹�˾</a>! δ����Ȩ��ֹ���ƻ�������!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp">www.mingrisoft.com</a>, All Rights Reserved! 2006<br />
      <br />
      �������ڴ���1024*768�ķֱ�����ʹ��</div></td>
  </tr>
</table>
</body>
</html>
