<?php include "conn/conn.php";?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>一般搜索</title>
</head>
<script language="javascript">
function Mycheck(form){
if (form.txt_tj.value=="")
{ alert("请输入要搜索的关键字！");form.txt_tj.focus();return(false) ;}
return(true);
}
</script>
<body>
  <table width="777" border="0" align="center" cellpadding="0" cellspacing="0">
  <form name="myform" method="post" action="" onSubmit="return Mycheck(this)">
	<tr>
      <td width="717" height="182" background="images/images_01.gif">&nbsp;</td>
    </tr>
    <tr>
      <td height="31" align="center" bgcolor="#FCFCDC">
      <input name="txt_tj" type="text" id="txt_tj" size="50">
&nbsp;      <input name="submit" type="submit" id="submit" value="搜索"  ></td>
    </tr>
	</form>
    <tr>
      <td align="center" valign="top" bgcolor="#FCFCDC">
        <br>
        <table width="700" border="0" cellpadding="0" cellspacing="0">
		<?php
		if($_POST["submit"]<>""){
			$txt_tj=trim($_POST["txt_tj"]);
			$sql=mysql_query("select * from tb_book where synopsis like '%$txt_tj%' or bookname like '%$txt_tj%' order by id desc");
			$info=mysql_fetch_array($sql);
		}
		if($info){
		do{
		?>
          <tr>
            <td height="23">&nbsp;<font color="#CC0033">◎&nbsp;<?php echo $info[bookname];?></font></td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $info[synopsis];?></td>
          </tr>
		  <?php }while($info=mysql_fetch_array($sql));
		  }else{
		  ?>
		  <tr>
		  <td>对不起，您检索的信息不存在！</td>
		  </tr>
		  <?php
		  }
		  ?>
      </table>     
      <br></td>
    </tr>
  </table>

</body>
</html>
