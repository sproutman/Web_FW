<?php include "conn/conn.php"; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="Css/style.css">
<title>����CSS��ʽ��ҳ��ӡ����</title>
<style>
@media print{
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
<object id="Wb" classid="ClSID:8856F961-340A-11D0-A96B-00C04Fd705A2" width="0" height="0">
</object>
<table width="680" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="171" background="images/image_01.gif" class="bgnoprint"> </td>
      </tr>
      <tr>
        <td height="193" valign="top" background="images/image_02.gif" class="bgnoprint">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="28" >&nbsp;</td>
              <td width="619" align="center" valign="top">
			  <table width="99%" border="0" cellspacing="0" cellpadding="0">
				  <tr>
                    <td height="27" align="center" style=" font-size:14px;"><b>ͼ����Ϣ��ѯ</b></td>
                  </tr>
                </table>
                <table width="98%" border="0" cellpadding="0" cellspacing="1" bgcolor="#000000" bordercolor="#FFFFFF" bordercolordark="#000000" bordercolorlight="#FFFFFF" >
				  <thead style="display:table-header-group;"><!--���ñ�ͷ-->
					<tr bgcolor="#EFEFEF">
                      <td width="6%" height="20" align="center">���</td>
                      <td width="27%" align="center">ͼ������</td>
                      <td width="23%" align="center">���ݼ��</td>
                      <td width="8%" align="center">����</td>
                      <td width="10%" align="center">����</td>
                      <td width="15%" align="center">������</td>
                      <td width="11%" align="center">����ʱ��</td>
                    </tr>
  				  </thead>
				   <!--���Ʒ�ҳ-->  
					<?php
						$sql=mysql_query("select * from tb_book");
						$info=mysql_fetch_array($sql);
						$row=1;
						do{
						?>
                    <tr align="center" <?php if($row==2){ ?>style="page-break-after:always"<?php } ?>>
                      <td bgcolor="#FFFFFF"><?php echo $info[id];?></td>
                      <td height="25" align="left" bgcolor="#FFFFFF">&nbsp;<?php echo $info[bookname];?></td>
                      <td align="left" bgcolor="#FFFFFF">&nbsp;<?php echo $info[synopsis];?></td>
                      <td bgcolor="#FFFFFF"><?php echo $info[price];?></td>
                      <td bgcolor="#FFFFFF"><?php echo $info[maker];?></td>
                      <td bgcolor="#FFFFFF"><?php echo $info[publisher];?></td>
                      <td bgcolor="#FFFFFF"><?php echo $info[issuDate];?></td>
                    </tr>
					<?php
					$row++;
					}while($info=mysql_fetch_array($sql))
					?>
					<!--���ñ�β-->
				<tfoot style="display:table-footer-group; border:none;"><tr><td></td></tr></tfoot>
                </table>
                  <table width="99%" height="25" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="25" align="right" class="noprint"><a href="#" onClick="document.all.Wb.Execwb(7,1)">��ӡԤ��</a> <a href="#" onClick="document.all.Wb.Execwb(6,1)">��ӡ</a></td>
                    </tr>
                  </table>                </td>
              <td width="33">&nbsp;</td>
            </tr>
        </table>		</td>
      </tr>
      <tr>
        <td height="26" background="images/image_03.gif"  class="bgnoprint">&nbsp;</td>
      </tr>
</table>
</body>
</html>

