<?php
	include "conn/conn.php";
?>
<script language="javascript">
function send(){
if(document.myform.txt_book.value==""){
	alert("�������ѯ�ؼ���!");
	myform.txt_book.focus();
	return false;
}
}
</script>
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
    <form name="myform" method="post" action="checkindex.php">
	<td width="594" align="center" valign="middle" background="images/01_07.jpg" class="style2">ѡ���ѯ����     
      <select name="txt_sel" id="txt_sel">
        <option value="bookname">ͼ������</option>
        <option value="Maker">����</option>
        <option value="publisher" selected>������</option>
      </select>
      <select name="txt_tj" id="txt_tj">
        <option value="like" selected>like</option>
        <option value="=">=</option>
        <option value=">">&gt;</option>
        <option value="<">&lt;</option>
      </select>
      <input name="txt_book" type="text" id="txt_book" size="25" >
      &nbsp;<input type="submit" name="Submit" value="��ѯ" onclick="return send()">
	</td>
	</form>
  </tr> 
  <tr valign="top" bgcolor="#FFFFFF"> 
    <td height="242" colspan="2">
	  <table width="100%" height="241"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="724" height="242" align="center" valign="top">
              <br>
              <table width="680"  border="0" cellpadding="0" cellspacing="1" bgcolor="#625D59">
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
			  $sql=mysql_query("select * from tb_book");
			  $info=mysql_fetch_array($sql);
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
            </table>          </td>
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
