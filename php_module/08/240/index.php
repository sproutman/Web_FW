<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�������Ӳ�ѯ</title>
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
    <td bgcolor="#679D66"><table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="1">
     <form  name="form1" method="post" action="index.php">
	  <tr>
        <td bgcolor="#ADC9AC"><div align="center">��ѯԱ��������Ϣ&nbsp;
            <input type="submit" name="submit" value="��ѯ" class="buttoncss">
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
    <td bgcolor="#679D66"><table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="77" height="25" bgcolor="#ADC9AC"><div align="center" class="STYLE1">
          <div align="center">Ա�����</div>
        </div></td>
        <td width="65" bgcolor="#ADC9AC"><div align="center" class="STYLE1">Ա������</div></td>
        <td width="40" bgcolor="#ADC9AC"><div align="center" class="STYLE1">Ա���Ա�</div></td>
        <td width="44" bgcolor="#ADC9AC"><div align="center" class="STYLE1">����</div></td>
        <td width="123" bgcolor="#ADC9AC"><div align="center" class="STYLE1">��ϵ�绰</div></td>
        <td width="85" bgcolor="#ADC9AC"><div align="center" class="STYLE1">��������</div></td>
        <td width="58" height="25" bgcolor="#ADC9AC"><div align="center" class="STYLE1">��������</div></td>
      </tr>
      <?php
		 include_once("conn.php");
		 $sql=mysql_query("select tb_yg.userid,tb_yg.name,tb_yg.sex,tb_yg.age,tb_yg.tel,tb_yg.bm,tb_yg_info.gz from tb_yg inner join tb_yg_info on tb_yg.userid=tb_yg_info.ygid",$conn);
		 $info=mysql_fetch_array($sql);
		 if($info==false)
		  {
	   ?>
      <tr>
        <td height="25" colspan="9" bgcolor="#FFFFFF"><div align="center">û�в��ҵ������Ϣ!</div></td>
      </tr>
      <?php
		  }
		  else
		  {
		    do{
		?>
      <tr>
       
        <td  height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[userid];?></div></td>
        <td  height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[name];?></div></td>
        <td  height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sex];?></div></td>
        <td  height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[age];?></div></td>
        <td  height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[tel];?></div></td>
        <td  height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[bm];?></div></td>
        <td  height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[gz];?></div></td>
      </tr>
      <?php
	    }while($info=mysql_fetch_array($sql));
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
