<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script language="javascript">
 function chkselect(form){
   if(form.xz.value=="qxz"){
     alert("��ѡ��Ա����ְ���!");
     form.xz.focus();
	 return(false);
   }
   return(true);
 }
</script>
<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="600" height="76" /></td>
  </tr>
</table>
<table width="600" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="600" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#DDE2AC"><table width="600" height="25" border="0" cellpadding="0" cellspacing="1">
     <form name="form1" method="post" action="index.php" onsubmit="return chkselect(this)">
	  <tr>
        <td bgcolor="#51A8FF"><div align="center">�鿴Ա����ְ���&nbsp;
          <select name="xz">
            <option selected="selected" value="qxz">��ѡ��</option>
            <option value="1">��ְ</option>
            <option value="2">��ְ</option>
          </select>
          &nbsp;<input type="submit" name="submit" value="�鿴" class="buttoncss"></div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
<?php
 if($_POST[submit]!="")
 {
   $xz=$_POST[xz];
   include_once("conn.php");
   if($xz==1){
	$sqlstr="select * from tb_yg where zz in (select zz from tb_yg where zz='T')";
   }elseif($xz==2){
    $sqlstr="select * from tb_yg where zz in (select zz from tb_yg where zz='F')";
   }
   
?>
<table width="600" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>

<table width="600" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#0033FF"><table width="600" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="51" height="25" bgcolor="#51A8FF"><div align="center">���</div></td>
        <td width="78" bgcolor="#51A8FF"><div align="center">Ա��ID</div></td>
        <td width="90" bgcolor="#51A8FF"><div align="center">Ա������</div></td>
        <td width="55" bgcolor="#51A8FF"><div align="center">�Ա�</div></td>
        <td width="51" bgcolor="#51A8FF"><div align="center">����</div></td>
        <td width="85" bgcolor="#51A8FF"><div align="center">�绰</div></td>
        <td width="117" bgcolor="#51A8FF"><div align="center">����</div></td>
        <td width="64" bgcolor="#51A8FF"><div align="center">�Ƿ���ְ</div></td>
      </tr>
      <?php
	   $sql=mysql_query($sqlstr,$conn);
       $info=mysql_fetch_array($sql);
      if($info==false)
        {
	  ?>
      <tr>
        <td height="25" colspan="8" bgcolor="#FFFFFF"><div align="center">û�в鵽��Ҫ�ҵ�����!</div></td>
      </tr>
      <?php
      }
     else
      {
	   do
	    {
    ?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[id];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[userid];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[name];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sex];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[age];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[tel];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[bm];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[zz];?></div></td>
      </tr>
      <?php
	    }
		while($info=mysql_fetch_array($sql));
	  ?>
    </table></td>
  </tr>
</table>
<?php
   }
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
