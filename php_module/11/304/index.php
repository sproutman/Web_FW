<?php
session_start();
if(!isset($_SESSION["prolist"]))
 {
   session_register("prolist");
   $_SESSION["prolist"]="";
 }
if(!isset($_SESSION["num"]))
  {
    session_register("num");
	$_SESSION["num"]=""; 
  } 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>���ﳵ��</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>

<body>
<table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#666666"><table width="500" height="74" border="0" align="center" cellpadding="0" cellspacing="1">
     
	 
	 <form name="form1" method="post" action="changenum.php">
	  <tr>
        <td height="20" colspan="5" bgcolor="#666666"><div align="center" class="STYLE1">���ﳵ</div></td>
      </tr>
      <tr>
        <td width="89" height="20" bgcolor="#FFFFFF"><div align="center">��Ʒ����</div></td>
        <td width="82" bgcolor="#FFFFFF"><div align="center">��Ʒ����</div></td>
        <td width="107" bgcolor="#FFFFFF"><div align="center">��Ʒ����</div></td>
        <td width="107" bgcolor="#FFFFFF"><div align="center">С��</div></td>
        <td width="109" bgcolor="#FFFFFF"><div align="center">����</div></td>
      </tr>
	  <?php
	  $arrayid=explode("@",$_SESSION["prolist"]);
	  $arraynum=explode("@",$_SESSION["num"]);
	  $s=0;
	  for($i=0;$i<count($arrayid);$i++)
	   {  
	     include_once("conn.php");
		 if($arrayid[$i]!="")
		  {
	       $sql1=mysql_query("select * from tb_car where id='".$arrayid[$i]."'");
		   $info1=mysql_fetch_array($sql1);
	  ?>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[name];?></div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><input type="text" name="<?php echo $info1[id];?>" size="10" class="inputcss" value="<?php echo $arraynum[$i];?>"></div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[price];?>Ԫ</div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[price]*$arraynum[$i];$s+=$info1[price]*$arraynum[$i];?>Ԫ</div></td>
        <td height="20" bgcolor="#FFFFFF"><div align="center"><a href="removeitem.php?id=<?php echo $arrayid[$i];?> " class="a1">ɾ��</a></div></td>
      </tr>
	  <?php
	       }
	   }
	  ?>
	  <tr>
        <td height="20" colspan="5" bgcolor="#FFFFFF"><div align="right"><input type="submit" value="��������" class="buttoncss">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�ܼƣ�<?php echo $s;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="setcarnull.php" class="a1">��չ��ﳵ</a></div></td>
        </tr>
		
	</form>	
		
    </table></td>
  </tr>
</table>
<table width="500" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#666666"><table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td height="25" colspan="5"><div align="center" class="STYLE1">��Ʒ�б�</div></td>
      </tr>
      <tr>
        <td width="96" height="25" bgcolor="#FFFFFF"><div align="center">��Ʒ����</div></td>
        <td width="111" bgcolor="#FFFFFF"><div align="center">����ʱ��</div></td>
        <td width="83" bgcolor="#FFFFFF"><div align="center">����</div></td>
        <td width="61" bgcolor="#FFFFFF"><div align="center">����</div></td>
        <td width="143" bgcolor="#FFFFFF"><div align="center">����</div></td>
      </tr>
	  <?php
	  include_once("conn.php");
	  $sql=mysql_query("select * from tb_car order by addtime desc");
	  $info=mysql_fetch_array($sql);
	  if($info==false)
	   {
	     echo "������Ʒ��Ϣ!";
	   }
	   else
	    {
		 do
		  {
	  ?>
	  <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[name];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[addtime];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[shuliang];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[price];?></div></td>
	    <td height="25" bgcolor="#FFFFFF"><div align="center"><a href="addcar.php?id=<?php echo $info[id];?>" class="a1">���빺�ﳵ</a></div></td>
	  </tr>
	  <?php
	       }while($info=mysql_fetch_array($sql));
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
