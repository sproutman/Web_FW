<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��������</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="499" height="85" /></td>
  </tr>
</table>
<table width="499" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="499" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="50" bgcolor="#FE870E"><table width="499" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="122" height="25" bgcolor="#FFFFFF"><div align="center">��Ʒ����</div></td>
        <td width="124" bgcolor="#FFFFFF"><div align="center">����ʱ��</div></td>
        <td width="123" bgcolor="#FFFFFF"><div align="center">��Ʒ����</div></td>
        <td width="125" bgcolor="#FFFFFF"><div align="center">�����۸�</div></td>
      </tr>
	 <?php
	  
	  class rollpage
	  {
	  
	    public $pagesize;
		public $page;
		public $pagecount;
		
		public function __construct($x,$y)
		{
		  $this->pagesize=$x;
		  $this->page=$y; 
		}
	  
	    public function roll()
		 {
		  include_once("conn.php");
		  $sql=mysql_query("select count(*) as total from tb_goods",$conn);
	      $info=mysql_fetch_array($sql);
	      $total=$info[total];
	    if($total==0)
	      {
	       echo "<tr>";
	       echo "<td height=\"20\" colspan=\"3\" bgcolor=\"#FFFFFF\"><div align=\"center\">�Բ������޽�����Ϣ��</div></td>";
           echo "</tr>";
	      }
	     else
	      {
		   if(empty($this->page)==true || is_numeric($this->page)==false)
		   {
		     $this->page=1;
		   }
		   else
		   {
		     $this->page=intval($this->page);
		   }
		   
		   if($total<$this->pagesize)	
		   {
		     $this->pagecount=1;
		   }
		   else
		   {
		     if($total%$this->pagesize==0)
			  {
			    $this->pagecount=intval($total/$this->pagesize);
			  }
			  else
			  {
			    $this->pagecount=intval($total/$this->pagesize)+1;
			  } 
		   }
	     $sql=mysql_query("select * from tb_goods order by addtime desc limit ".($this->page-1)*$this->pagesize.",$this->pagesize",$conn);
	     while($info=mysql_fetch_array($sql))
	       {  	
		   
		 ?>
		 
	  <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[name];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[addtime];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[shuliang];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo number_format($info[price],2);?>Ԫ</div></td>
      </tr>
		 
		 <?php
	       }
	   } 
	 }
	} 

    $rpobj =new rollpage(4,$_GET[page]); 
	$rpobj->roll();
	 ?> 
    </table></td>
  </tr>
</table>
<table width="499" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="253"><div align="left"></div></td>
    <td width="246"><div align="right">
	<?php
   if($rpobj->page>=2)
	{
    ?>
  <a href="index.php?page=1" title="��ҳ" class="a1"><font face="webdings"> 9 </font></a> 
  <a href="index.php?page=<?php echo $rpobj->page-1;?>" title="ǰһҳ"  class="a1"><font face="webdings"> 7 </font></a>
  <?php
    }
   if($rpobj->pagecount<=4)
     {
		for($i=1;$i<=$rpobj->pagecount;$i++)
		{
  ?>
        <a href="index.php?page=<?php echo $i;?>"  class="a1"><?php echo $i;?></a>
  <?php
		 }
	  }
	else
	  {
		 for($i=1;$i<=4;$i++)
		  {	 
  ?>
          <a href="index.php?page=<?php echo $i;?>"  class="a1"><?php echo $i;?></a>
  <?php 
          }
  ?>
        <a href="index.php?page=<?php 
		 if($rpobj->pagecount>=$rpobj->page+1)
		   echo $rpobj->page+1;
		  else
		   echo 1; 
		 
		 ?>" title="��һҳ"  class="a1"><font face="webdings"> 8 </font></a> 
		<a href="index.php?page=<?php echo $this->pagecount;?>" title="βҳ"  class="a1"><font face="webdings"> : </font></a>
  <?php 
          }
  ?>
	&nbsp;</div></td>
  </tr>
</table>
<table width="600" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"><br />
      ��Ȩ����&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">����ʡ���տƼ����޹�˾</a>! δ����Ȩ��ֹ���ƻ�������!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">www.mingrisoft.com</a>, All Rights Reserved! 2006<br />
      <br />
      �������ڴ���1024*768�ķֱ�����ʹ�� </div></td>
  </tr>
</table>
</body>
</html>
