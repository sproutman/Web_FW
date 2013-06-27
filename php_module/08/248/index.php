<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>
<script language="javascript">
  function chkinput(form){
    if(form.bookname.value==""){
	  alert("请输入图书名称!");
	  form.bookname.select();
	  return(false);
     }
  	
	return(true);
  }
</script>
<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/banner.gif" width="500" height="75" /></td>
  </tr>
</table>
<table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#679D66"><table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="1">
     <form  name="form1" method="post" action="index.php" >
	  <tr>
        <td bgcolor="#66B2FF"><div align="center">按语言统计对图书类别进行统计
            <input type="submit" name="submit" value="统计" class="buttoncss">
        </div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
<?php
 if($_POST[submit]!=""){

?>

<table width="500" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>

<table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#0033FF"><table width="500" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr>
        <td width="161" height="25" bgcolor="#66B2FF"><div align="center" class="STYLE1">书名 </div></td>
        <td width="87" bgcolor="#66B2FF"><div align="center" class="STYLE1">2004-4</div></td>
        <td width="75" bgcolor="#66B2FF"><div align="center" class="STYLE1">2004-5</div></td>
        <td width="78" bgcolor="#66B2FF"><div align="center" class="STYLE1">2004-6</div></td>
        <td width="93" bgcolor="#66B2FF"><div align="center" class="STYLE1">2004-7</div></td>
      </tr>
      <?php
		 include("conn.php");
		 $rs=new com("adodb.recordset");
		 $rs->open("transform sum(number) as total select yyassort from tb_booksort where yyassort in (select yyassort from tb_booksort) group by yyassort pivot analysetime",$conn,3,1);
		 if($rs->eof|| $rs->bof)
		 {
		 ?>
      <tr>
        <td height="25" colspan="8" bgcolor="#FFFFFF"><div align="center">没有查找到相关信息!</div></td>
      </tr>
      <?php
		  }
		  else
		  {
		     while(!$rs->eof)
		     {
		?>
      <tr>
        <?php
		 for($i=0;$i<=$rs->fields->count-1;$i++)
		  {
		?>
	      <td  height="25" bgcolor="#FFFFFF"><div align="center"><?php $f=$rs->fields($i); echo $f->value;?></div></td>
		<?php
		 }
		?>
      </tr>
      <?php
	         $rs->movenext;
	       }
	   }
	  ?>
    </table></td>
  </tr>
</table>
<?php
 }
?>
<table width="600" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"><br />
       版权所有&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">吉林省明日科技有限公司</a>! 未经授权禁止复制或建立镜像!<br />
      Copyright &copy;&nbsp;<a href="http://www.mingrisoft.com/about.asp" class="a1">www.mingrisoft.com</a>, All Rights Reserved! 2007<br />
      <br />
      建议您在大于1024*768的分辨率下使用 </div></td>
  </tr>
</table>
</body>
</html>
