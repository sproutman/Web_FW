<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>PHP����Word</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="600" height="80" /></td>
  </tr>
</table>
<table width="600" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<?php
if($_GET[id]!="")
 {
   include_once("word.php");
   $word=new word();
   $word->start();
 }
   
?>
<table width="600" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="50" bgcolor="#B2CA86"><table width="600" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      
	  <tr>
        <td width="127" height="25" bgcolor="#C6DA9A"><div align="center">��Ʒ����</div></td>
        <td width="125" bgcolor="#C6DA9A"><div align="center">��Ʒ�۸�</div></td>
        <td width="104" bgcolor="#C6DA9A"><div align="center">����ʱ��</div></td>
        <td width="116" bgcolor="#C6DA9A"><div align="center">��Ʒ����</div></td>
        <td width="122" bgcolor="#C6DA9A"><div align="center">����</div></td>
      </tr>
	  <?php
	  include_once("conn.php");
	  $sql=mysql_query("select * from tb_goods order by addtime desc",$conn);
	  $info=mysql_fetch_array($sql);
	  if($info==false)
	   {
	      echo "������Ʒ��Ϣ��";
	   }
	   else
	    {
		  do
		   {
		   
		
	  ?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[name]?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[price]?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[addtime]?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[shuliang]?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[candi]?></div></td>
      </tr>
	  <?php
	      }
		   while($info=mysql_fetch_array($sql));
	      }
	 
      if($_GET[id]!="")
        {
         $word->save("word/data.doc");//����word���ҽ���.
		
        }

     if($_GET[id]=="")
	 {
      ?>
	  
	  <tr>
        <td height="25" colspan="5" bgcolor="#FFFFFF"><div align="center"><input type="button" name="submit" value="��������ݱ��浽Word" class="buttoncss" onclick="window.location.href='index.php?id=print'"></div></td>
      </tr>
	  <?php
	  }else{
	  echo "<div align=center>��������Ѿ����浽Word��!</div>";
	  }
	   
	  ?>
    </table></td>
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
