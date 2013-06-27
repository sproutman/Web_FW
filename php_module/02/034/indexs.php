<?php session_start();include("conn/conn.php");?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>投票系统中单选按钮与复选框的应用</title>
<style type="text/css">
<!--
.style1 {font-size: 13px}
.style2 {font-size: 12px}
-->
</style>
</head>
<body>
 <?php 
  $query="select * from tb_poll1 where tpzt='$lmlb'";
  $result=mysql_query($query);
  $myrow=mysql_fetch_array($result);
  $danxuan=$myrow[danxuan];
  if($danxuan=="单选"){
  ?>
  <table width="450" border="1" cellpadding="0" cellspacing="0" background="images/admin2.gif">
	 <form name="form1" method="post" action="index_ok.php" enctype="multipart/form-data">
    <tr align="center">
    <td height="25"><span class="style1">单选区</span></td>
    <td class="style1"> 投票主题(<?php echo $lmlb;?>)</td>
    <td width="173" colspan="2" class="style1">投票结果</td>
    </tr>
	  <?php 
  $query="select * from tb_poll1 where tpzt='$lmlb'";
  $result=mysql_query($query);
  while($myrow=mysql_fetch_array($result)){
  ?>
  <tr>
    <td width="81" height="22" align="center"><span class="style2"><?php echo $myrow[tpnr];?></span></td>
    <td width="188" align="center">
                    <input name="ljid" type="radio" value="<?php echo $myrow[id];?>"> 
                <input type="hidden" name="tpzt1" value="<?php echo $myrow[tpzt];?>">	  </td>
	<td height="22" colspan="2" align="center"><table width="150" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="115" align="center" class="style2"><?php echo $myrow[tpnr];?></td>
        <td width="179" class="style2">&nbsp;<?php echo $myrow[tpcs];?></td>
      </tr>
    </table></td>
    </tr>
 <?php }?>
  <tr>
    <td height="25">&nbsp;</td>
    <td colspan="3">&nbsp;<input type="submit" name="Submit" value="提交"></td>
    </tr>
  </form>   
</table> 
  <?php }?>
  
  <?php 
  $query="select * from tb_poll2 where tpzt='$lmlb'";
  $result=mysql_query($query);
  $myrow=mysql_fetch_array($result);
  $danxuan=$myrow[danxuan];
  if($danxuan=="多选"){
  ?>
  <table width="450" border="1" cellpadding="0" cellspacing="0" background="images/kkk.JPG">
<form name="form2" method="post" action="index_ok.php?recid=<?php echo $lmlb;?>">
  <tr>
    <td width="82" height="25" align="center" class="style1">多选区</td>
    <td width="186" align="center" class="style1">投票主题(<?php echo $lmlb;?>)</td>
    <td width="174" align="center" class="style1">投票结果</td>
  </tr>
 <?php 
  $query="select * from tb_poll2 where tpzt='$lmlb' ";
  $result=mysql_query($query);
  while($myrows=mysql_fetch_array($result)){
  ?>
  <tr>
    <td height="25" align="center" class="style2"><?php echo $myrows[tpnr];?></td>
    <td align="center">
      <label>      	
      <input name="<?php echo $myrows[id];?>" type="checkbox" value="<?php echo $myrows[id];?>">  
      </label>    </td>
    <td align="center"><table width="150" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="120" align="center" class="style2"><?php echo $myrows[tpnr];?></td>
        <td width="174" class="style2">&nbsp;<?php echo $myrows[tpcs];?></td>
      </tr>
    </table></td>
  </tr>
  <?php }?>
  <tr>
    <td height="25" align="right">&nbsp;</td>
    <td>&nbsp;<input type="submit" name="Submit2" value="提交"></td>
    <td>&nbsp;</td>
  </tr>
  </form>
</table>
<?php }?>
</body>
</html>
