<?php include "conn/conn.php";?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link  href="css/style.css" rel="stylesheet">
<title>����IE����Ĵ�ӡ����ʵ�ִ�ӡ</title>
</head>
<body>
<table width="763" height="362"  border="1" cellpadding="0" cellspacing="0" bgcolor="#9E7DB4" align="center"> 
  <tr> 
    <td height="78" colspan="2" background="images/01_01.jpg">&nbsp;</td> 
  </tr> 
    <tr> 
    <td width="163" height="20" valign="middle" background="images/01_02.jpg">&nbsp;</td> 
	<td width="594" align="center" valign="middle" background="images/01_07.jpg" class="style2">��ѯ�������:</td>
  </tr> 
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td height="242" colspan="2">
	  <table width="100%" height="241"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="707" height="150" align="center" valign="top">
              <br>
              <table width="680"  border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#625D59">
                <tr align="center" bgcolor="#FF9ABD">
                  <td width="50" height="20">���</td>
                  <td width="156">ͼ������</td>
                  <td width="67">����ʱ��</td>
                  <td width="58">ͼ�鶨��</td>
                  <td width="133">���ݽ���</td>
                  <td width="62">����</td>
                  <td width="93">������</td>
                </tr>
              <?php
				$txt_sel=$_POST[txt_sel];
				$txt_tj=$_POST[txt_tj];
				$txt_book=$_POST[txt_book];
				if ($_POST[Submit]<>""){
					if($_POST[txt_tj]=="like"){       //���ѡ�������Ϊ"like",�����ģ����ѯ
						$sql=mysql_query("select * from tb_book where ".$txt_sel." like '%".$txt_book."%'");
						$info=mysql_fetch_array($sql);
					}
					  if($_POST[txt_tj]=="="){
						$sql=mysql_query("select * from tb_book where ".$txt_sel." = '".$txt_book."'");
						$info=mysql_fetch_array($sql);
					}			
					  if($_POST[txt_tj]==">"){
						$sql=mysql_query("select * from tb_book where ".$txt_sel." > '".$txt_book."'");
						$info=mysql_fetch_array($sql);
					}
					  if($_POST[txt_tj]=="<"){
						$sql=mysql_query("select * from tb_book where ".$txt_sel." < '".$txt_book."'");
						$info=mysql_fetch_array($sql);
					}			
					  else{
					  	if($info==false){          //�����������Ϣ�����ڣ��������Ӧ����ʾ��Ϣ
						echo "<div align='center' style='color:#FF0000; font-size:12px'>�Բ�����������ͼ����Ϣ������!</div>";
						}
					}
				}                                                       
				 do{
			  ?> 
			    <tr align="left" bgcolor="#FFFFFF">
                  <td height="20" align="center"><?php echo $info[id]; ?></td>
                  <td >&nbsp;<?php echo $info[bookname]; ?></td>
                  <td>&nbsp;<?php echo $info[issuDate]; ?></td>
                  <td align="center"><?php echo $info[price]; ?></td>
                  <td>&nbsp;&nbsp;<?php echo $info[synopsis]; ?></td>
                  <td>&nbsp;<?php echo $info[maker]; ?></td>
                  <td>&nbsp;<?php echo $info[publisher]; ?></td>
                </tr>
				<?php
				}
				while($info=mysql_fetch_array($sql));
				?>
            </table>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<a href="#" onclick="window.print();">��ӡ</a></p></td>
        </tr>
      </table>
    </td> 
  </tr> 
  <tr bgcolor="#FFFFFF"> 
    <td height="16" colspan="2"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="16" background="images/01_08.jpg">&nbsp;</td>
      </tr>
    </table></td> 
  </tr> 
</table>
</body>
</html>
