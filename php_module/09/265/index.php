<?php
include_once("top.php");
?>
<table width="755" height="15" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="755" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#2A4FA7"><table width="755" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="115" height="25" bgcolor="#99CCFF"><div align="center">ѧ������</div></td>
        <td width="113" bgcolor="#99CCFF"><div align="center">ѧ�� </div></td>
        <td width="106" bgcolor="#99CCFF"><div align="center">����</div></td>
        <td width="149" bgcolor="#99CCFF"><div align="center">סַ</div></td>
        <td width="189" bgcolor="#99CCFF"><div align="center">���֤��</div></td>
        <td width="76" bgcolor="#99CCFF"><div align="center">����</div></td>
      </tr>
	 <?php
	 include_once("conn.php");
	$sql=$conn->query("select * from tb_stu"); 
	$info=$sql->fetch_array(MYSQLI_ASSOC);
	if($info==NULL)
	 {
	   echo "����ѧ����Ϣ!";
	 } 
	 else
	 {
	   do
	    {
	 ?> 
	 
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sname];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sno];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sage];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[saddress];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[ssfzh];?></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><a href="javascript:if(window.confirm('ȷ��ɾ����ѧ����Ϣô?')==true){window.location.href='delete.php?id=<?php echo $info[id];?>';}">ɾ��</a></div></td>
      </tr>
	  <?php
	     }
	    while($info=$sql->fetch_array(MYSQLI_ASSOC));
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
