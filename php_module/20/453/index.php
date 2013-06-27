<?php include "conn/conn.php";?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>常用搜索</title>
</head>
<body>
  <table width="777" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#99FFCC">
	<tr>
      <td width="777" height="182" background="images/images_01.gif">&nbsp;</td>
    </tr>
    <tr>
      <td height="45" align="left" valign="middle" bgcolor="#FFFFFF"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/openlanguage.gif" width="155" height="43"></p>      </td>
    </tr>
    <tr>
      <td align="center" valign="top" bgcolor="#FFFFFF"><table width="555" border="0" cellpadding="0" cellspacing="0">
        <?php
		$sql=mysql_query("select distinct resume,info from tb_books order by id desc");
		$info=mysql_fetch_array($sql);
		if($info){
		do{
		?>
        <tr>
          <td width="555" height="23"><font color="#CC0033">◎&nbsp;&nbsp;<a href="info.php?resume=<?php echo $info[resume];?>"><?php echo $info[resume];?></a></font></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo chinesesubstr($info[info],0,300);if(strlen($info[info])>300){echo "...";}?></td>
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
<?php
 function chinesesubstr($str,$start,$len){ 
    $strlen=$start+$len; 
    for($i=0;$i<$strlen;$i++){ 
        if(ord(substr($str,$i,1))>0xa0){ 
            $tmpstr.=substr($str,$i,2); 
            $i++; 
    } 
else 
       $tmpstr.=substr($str,$i,1); 
    } 
    return $tmpstr; 
}
?>
</body>
</html>
