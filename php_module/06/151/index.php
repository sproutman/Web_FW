<?php session_start(); include("conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title> ��ѯ��ҵԱ������ϸ��Ϣ</title>
<style type="text/css">
<!--
.STYLE4 {font-size: 13px}
.STYLE5 {font-family: "��������"; font-size: 20px;}
-->
</style>
</head>
<body>
<table width="450" height="28" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" class="STYLE5">��ѯ��ҵԱ������ϸ��Ϣ</td>
  </tr>
</table>
<form name="form1" method="post" action="index.php">
<table width="450" border="1" cellpadding="0" cellspacing="0" bgcolor="#71FFFF">
  <tr>
    <td width="176" align="center"><span class="STYLE1 STYLE4">����Ա���ı�Ų�ѯ</span></td>
    <td width="182"><input name="number" type="text" id="number"></td>
    <td width="84" height="25"><input name="Submit" type="submit" value="�ύ"></td>
  </tr>
</table>
</form>
<table width="450" border="1" cellpadding="0" cellspacing="0" bgcolor="#C1FFFF">
  <tr>
    <td width="67" align="center" class="STYLE4">���</td>
    <td width="72" align="center" class="STYLE4">����</td>
    <td width="119" align="center" class="STYLE4">�绰</td>
    <td width="182" height="25" align="center" class="STYLE4">��ַ</td>
  </tr>
  <?php if($Submit==true){
  $sound="number='$number'";
  $query=mysql_query("select * from tb_insert where $sound");
  if($query==true){
  while($myrow=mysql_fetch_array($query)){
  ?>
  <tr>
    <td align="center" class="STYLE4"><span class="STYLE2"><?php echo $myrow[number];?></span></td>
    <td align="center" class="STYLE4"><span class="STYLE2"><?php echo $myrow[name];?></span></td>
    <td height="23" align="center" class="STYLE4"><span class="STYLE2"><?php echo $myrow[tel];?></span></td>
    <td height="23" align="center" class="STYLE4"><span class="STYLE2"><?php echo $myrow[address];?></span></td>
  </tr>
<?php }}}?>
</table>
</body>
</html>
