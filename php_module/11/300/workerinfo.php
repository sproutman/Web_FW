<?php
include_once("top.php");
?>
<table width="610" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td  bgcolor="#366696"><table width="610" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="70" height="25" bgcolor="#FFFFFF"><div align="center">Ա������</div></td>
        <td width="99" bgcolor="#FFFFFF"><div align="center">��������</div></td>
        <td width="55" bgcolor="#FFFFFF"><div align="center">����</div></td>
        <td width="100" bgcolor="#FFFFFF"><div align="center">�������</div></td>
        <td width="109" bgcolor="#FFFFFF"><div align="center">���֤��</div></td>
        <td width="118" bgcolor="#FFFFFF"><div align="center">��ͥסַ</div></td>
        <td width="51" bgcolor="#FFFFFF"><div align="center">����</div></td>
      </tr>
	  <?php
	  include_once("conn.php");
	  $sql=mysql_query("select * from tb_worker",$conn);
	  $info=mysql_fetch_array($sql);
	  if($info==false)
	   {
	      echo "����Ա����Ϣ!";
	   }
	   else
	    {
	     do
		  {
	  ?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[name];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[bm];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[age];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[type];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sno];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[address];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><a href="changeworkerinfo.php?id=<?php echo $info[id];?>" class="a1">�޸�</a></div></td>
      </tr>
	  <?php
	       }
		   while($info=mysql_fetch_array($sql));
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
