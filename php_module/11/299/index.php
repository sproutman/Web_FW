<?php
include_once("top.php");
?>
<table width="555" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#42A2D6"><table width="555" height="50" border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td width="137" height="25" bgcolor="#FFFFFF"><div align="center">�û��ǳ�</div></td>
        <td width="142" bgcolor="#FFFFFF"><div align="center">ע��ʱ��</div></td>
        <td width="132" bgcolor="#FFFFFF"><div align="center">�Ա�</div></td>
        <td width="139" bgcolor="#FFFFFF"><div align="center">E-mail</div></td>
      </tr>
	  <?php
	   include_once("conn.php");
	   $sql=mysql_query("select * from tb_chat order by regtime desc",$conn);
	   $info=mysql_fetch_array($sql);
	   if($info==false)
	    {
		  echo "����ע���û���Ϣ";
		}
		else
		{
		  do
		   {
	  ?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[usernc];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[regtime];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sex];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[email];?></div></td>
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
</body>
</html>
