<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
#Layer1 {
	position:absolute;
	left:51px;
	top:32px;
	width:114px;
	height:90px;
	z-index:1;
}
#Layer2 {
	position:absolute;
	left:71px;
	top:46px;
	width:99px;
	height:81px;
	z-index:1;
}
-->
</style>
</head>

<body >
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="500" height="75" /></td>
  </tr>
</table>
<table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#679D66"><table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="1">
     <form  name="form1" method="post" action="index.php" >
	  <tr>
        <td bgcolor="#66B2FF"><div align="center">������ͳ�Ʋ�ͬ����Ӫҵ��
            <input type="submit" name="submit" value="ͳ��" class="buttoncss">
        </div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
<?php
 if($_POST[submit]!=""){

?>

<table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>

<table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#0033FF"><table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="161" height="25" bgcolor="#66B2FF"><div align="center" class="STYLE1">������ </div></td>
        <td width="87" bgcolor="#66B2FF"><div align="center" class="STYLE1">������</div></td>
        <td width="75" bgcolor="#66B2FF"><div align="center" class="STYLE1">һ����</div></td>
        <td width="78" bgcolor="#66B2FF"><div align="center" class="STYLE1">������</div></td>
        
      </tr>
      <?php
		 include("conn.php");
		 $rs=new com("adodb.recordset");
		 $rs->open("transform xs select bm from tb_xs where bm in(select bm from tb_xs) group by bm pivot xs",$conn,3,1);
		 
		 if($rs->eof|| $rs->bof)
		 {
		 ?>
      <tr>
        <td height="25" colspan="8" bgcolor="#FFFFFF"><div align="center">û�в��ҵ������Ϣ!</div></td>
      </tr>
      <?php
		  }
		  else
		  {
		   while(!$rs->eof)
		    {
		?>
      <tr>
        <?php
		 for($i=0;$i<=$rs->fields->count-1;$i++)
		  {
		    $f=$rs->fields($i); 
		   if($f->value!="")
		   {
		?>
        <td  height="25" bgcolor="#FFFFFF"><div align="center"><?php echo  $f->value;?></div></td>
        <?php
		    }
		 }
		?>
      </tr>
      <?php
	       $rs->movenext;
	     }
	   }
	  ?>
    </table></td>
  </tr>
</table>
<?php
 }
?>
<table width="600" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"><br />
       ��Ȩ����&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">����ʡ���տƼ����޹�˾</a>! δ����Ȩ��ֹ���ƻ�������!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">www.mingrisoft.com</a>, All Rights Reserved! 2007<br />
      <br />
      �������ڴ���1024*768�ķֱ�����ʹ�� </div></td>
  </tr>
</table>
</body>
</html>
