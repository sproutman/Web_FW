<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ʹ�þۼ�����MIN�����۶�������ٵ���Ʒ</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>
<body>
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
    <td bgcolor="#3497E5"><table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="1">
     <form name="form1" method="post" action="index.php" > 
	  <tr>
        <td bgcolor="#ECB4B4"><div align="center" class="STYLE1">&nbsp;
            <input type="submit" name="submit" value="��ȡ������С����Ʒ��Ϣ" class="buttoncss">
        </div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
<table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>

<table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#3497E5"><table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="61" height="25" bgcolor="#ECB4B4"><div align="center" class="STYLE1">
          <div align="center">��ƷID</div>
        </div></td>
        <td width="74" bgcolor="#ECB4B4"><div align="center" class="STYLE1">
          <div align="center">����</div>
        </div></td>
        <td width="87" bgcolor="#ECB4B4"><div align="center" class="STYLE1">����</div></td>
        <td width="90" bgcolor="#ECB4B4"><div align="center" class="STYLE1">
          <div align="center">����</div>
        </div></td>
        <td width="89" bgcolor="#ECB4B4"><div align="center" class="STYLE1">
          <div align="center">����</div>
        </div></td>
        <td width="92" bgcolor="#ECB4B4"><div align="center" class="STYLE1"> 
          <div align="center">�̵�</div>
        </div></td>
      </tr>
	 <?php
	 include_once("conn.php");
	 $sql=mysql_query("select * from tb_gemsell",$conn);  
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
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $info[id];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $info[name];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $info[sl];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $info[inprice];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $info[outprice];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $info[shop];?></div></td>
	  </tr>
     <?php
	    }while($info=mysql_fetch_array($sql));
	  }
	  if($_POST[submit]!="")
	   {
	     $sql=mysql_query("select * from tb_gemsell where outprice-inprice in (select min(outprice-inprice) as minsell from tb_gemsell) ",$conn);  
	     $info=mysql_fetch_array($sql);
	 ?>
	  <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $info[id];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $info[name];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $info[sl];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $info[inprice];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $info[outprice];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php  echo $info[shop];?></div></td>
	  </tr>
	 <?php
	    }
		mysql_close($conn);
	 ?> 
    </table></td>
  </tr>
</table>
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
