<?php session_start(); include("conn/conn.php");
if($_SESSION[user]=="" && $_SESSION[pass]==""){
echo "对不起,您没有正确登录本站!!";
echo "<meta http-equiv=\"refresh\" content=\"3 url=index.php\">3秒后转入登录页面......";
}else{
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>通过session实现购物车功能</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
.style2 {font-size: 12px}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style>
</head>
<body>
 <table width="480" border="1" cellpadding="0" cellspacing="0" background="images/139sss.jpg">
   <form name="form1" method="post" action="">
   <tr align="center">
     <td height="25" colspan="4"><span class="style1">商品展示</span></td>
     </tr>
   <?php 
   $query="select * from tb_shop id order by id desc limit 0,1";
   $result=mysql_query($query);
   if($result==true){
   while($myrow=mysql_fetch_array($result)){;
   ?>
   <tr>
     <td width="120" rowspan="2" align="right"><img src="<?php echo $myrow[image];?>" width="115" height="100"></td>
     <td width="180" height="50" align="center" valign="middle" class="style2"><span class="style2">商品编号：</span>     <input name="number" type="text" id="number" value="<?php echo $myrow[number];?>" size="12"></td>
     <td colspan="2" align="center" valign="middle" class="style2">商品名称：
      <input name="name" type="text" id="name" value="<?php echo $myrow[name];?>" size="12"></td>
     </tr>
   <tr>
     <td height="50" align="center" valign="middle" class="style2"><span class="style2">商品价格：</span>     <input name="counts" type="text" id="counts" value="<?php echo $myrow[price];?>" size="10"></td>
     <td colspan="2">&nbsp;</td>
     </tr>
   
   <tr>
     <td>&nbsp;</td>
     <td height="22" colspan="3" align="center" class="style2"><a href="shop_ok.php?lmbs=<?php echo $myrow[id];?>">添加到购物车</a></td>
     </tr>
   </form>
	<?php }}?>
</table>
</body>
</html>
<?php }?>