<?php include "conn/conn.php"; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="Css/style.css">
<title>����CSS��ʽ��ӡҳ���е�ָ������</title>
<style>
@media print{
div{display:none}
.bgnoprint{
	background:display:none;
}
.noprint{
	display:none
}
}
body {
	margin-top: 0px;
}
</style>
</head>
<body class="bgnoprint">
<table width="644" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="159" background="images/image_01.gif" class="bgnoprint"> </td>
      </tr>
      <tr>
        <td height="180" valign="top" background="images/image_02.gif" class="bgnoprint">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="45" >&nbsp;</td>
              <td width="558" align="center" valign="top">
			  <table width="99%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="27" align="center" style=" font-size:14px;"><b>����̵��</b></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                </table>
                <table width="99%" border="0" cellpadding="0" cellspacing="1" bgcolor="#000000" bordercolor="#FFFFFF" bordercolordark="#000000" bordercolorlight="#FFFFFF" >
                    <tr bgcolor="#EFEFEF">
                      <td width="8%" align="center">���</td>
                      <td width="16%" align="center">��Ʒ����</td>
                      <td width="14%" align="center">���</td>
                      <td width="22%" align="center">��������</td>
                      <td width="12%" align="center">����</td>
                      <td width="17%" align="center">�������(��λ)</td>
                      <td width="11%" align="center">�̵�����</td>
                    </tr>
	            <?php
			$sql=mysql_query("select * from tb_stock");
			$info=mysql_fetch_array($sql);
			do{
		     ?>
                    <tr align="center">
                      <td bgcolor="#FFFFFF"><?php echo $info[id];?></td>
                      <td bgcolor="#FFFFFF"><?php echo $info[spname];?></td>
                      <td bgcolor="#FFFFFF"><?php echo $info[gg];?></td>
                      <td bgcolor="#FFFFFF"><?php echo $info[cd];?></td>
                      <td bgcolor="#FFFFFF"><?php echo $info[price];?></td>
                      <td bgcolor="#FFFFFF"><?php echo $info[kcsl];?></td>
                      <td bgcolor="#FFFFFF">&nbsp;</td>
                    </tr>
	            <?php
			}while($info=mysql_fetch_array($sql));
	            ?>
                </table>
                  <table width="99%" height="25" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="25" align="right"><div><a href="#" onClick="window.print();">��ӡ�̵㱨��</a>&nbsp;</div></td>
                    </tr>
                  </table>                </td>
              <td width="41">&nbsp;</td>
            </tr>
        </table>		</td>
      </tr>
      <tr>
        <td height="25" background="images/image_03.gif"  class="bgnoprint">&nbsp;</td>
      </tr>
    </table>
</body>
</html>

