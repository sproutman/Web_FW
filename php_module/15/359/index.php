<?php
	include "conn/conn.php";
?>
<script language="javascript">
function send(){
if(document.myform.txt_book.value==""){
	alert("请输入查询关键字!");
	myform.txt_book.focus();
	return false;
}
}
</script>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link  href="css/style.css" rel="stylesheet">
<title>利用IE自身的打印功能实现打印</title>
</head>
<body>
<table width="763" height="362"  border="1" cellpadding="0" cellspacing="0" bgcolor="#9E7DB4" align="center"> 
  <tr> 
    <td height="78" colspan="2" background="images/01_01.jpg">&nbsp;</td> 
  </tr> 
    <tr> 
    <td width="163" height="20" valign="middle" background="images/01_02.jpg">&nbsp;</td> 
    <form name="myform" method="post" action="checkindex.php">
	<td width="594" align="center" valign="middle" background="images/01_07.jpg" class="style2">选择查询条件     
      <select name="txt_sel" id="txt_sel">
        <option value="bookname">图书名称</option>
        <option value="Maker">作者</option>
        <option value="publisher" selected>出版社</option>
      </select>
      <select name="txt_tj" id="txt_tj">
        <option value="like" selected>like</option>
        <option value="=">=</option>
        <option value=">">&gt;</option>
        <option value="<">&lt;</option>
      </select>
      <input name="txt_book" type="text" id="txt_book" size="25" >
      &nbsp;<input type="submit" name="Submit" value="查询" onclick="return send()">
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
                  <td width="50" height="20">编号</td>
                  <td width="156">图书名称</td>
                  <td width="67">出版时间</td>
                  <td width="58">图书定价</td>
                  <td width="133">内容介绍</td>
                  <td width="62">作者</td>
                  <td width="93">出版社</td>
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
