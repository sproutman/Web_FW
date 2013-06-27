<?php include "conn/conn.php";?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>高级搜索</title>
</head>

<script language="javascript">
function chkinput(form){

  if(form.txt_name.value==""){
   alert("请输入要检索的全部名称!");
   form.txt_name.focus();
   return(false);
  }
  if(form.txt_content.value==""){
   alert("请输入要检索部分的内容!");
   form.txt_content.focus();
   return(false);
  }
  return(true);

}

</script>



<body>
  <table width="777" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
      <td width="777" height="182" background="images/images_01.gif">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" valign="top" bgcolor="#FCFCDC">
        <br>        <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
          <form name="myform" method="post" action="" onSubmit="return chkinput(this)">
            <tr>
              <td width="500" height="20" valign="middle" bgcolor="#FCFCDC">&nbsp;请输入要检索的全部名称：
                  <input name="txt_name" type="text" id="txt_name" size="20"></td>
            </tr>
            <tr>
              <td height="21" valign="middle" bgcolor="#FCFCDC">&nbsp;请输入要检索的部分内容：
                  <input name="txt_content" type="text" id="txt_content" size="20"></td>
            </tr>
            <tr>
              <td height="20" valign="middle" bgcolor="#FCFCDC">&nbsp;请选择要搜索的类型：
                  <select name="select">
                    <option value="ASP">ASP</option>
                    <option value="PHP" selected>PHP</option>
                    <option value="JSP">JSP</option>
                </select></td>
            </tr>
            <tr>
              <td height="51" align="center" valign="middle" bgcolor="#FCFCDC"><input type="submit" name="submit" value="高级搜索" "></td>
            </tr>
          </form>
        </table>        </td>
    </tr>
    <tr>
      <td align="center" valign="top" bgcolor="#FCFCDC"><table width="555" border="0" cellpadding="0" cellspacing="0">
        <?php
		if($_POST["submit"]<>""){
			$txt_name=trim($_POST["txt_name"]);
			$txt_content=trim($_POST["txt_content"]);
			$type=$_POST["select"];
			$sql=mysql_query("select * from tb_mrbook where bookname like '%$txt_name%' and  synopsis like '%$txt_content%' and resume like '%$type%'order by id desc");
			$info=mysql_fetch_array($sql);
		}
		if($info){
		do{
		?>
        <tr>
          <td width="555" height="23">&nbsp;<font color="#CC0033">◎&nbsp;<?php echo $info[bookname];?></font></td>
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
