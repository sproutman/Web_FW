<?php session_start(); include("conn/conn.php");
      if($_GET[pid]!=""){ $_SESSION["pid"]=$_GET[pid]; }
      if($_GET[cid]!=""){ $_SESSION["cid"]=$_GET[cid]; }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>级联菜单</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 13px}
.STYLE2 {font-size: 14px}
-->
</style>
</head>
<script language="javascript">
  function selectcity(x){
   if(x!="请选择"){
      window.location.href='index.php?pid='+x;
	 } 
  } 
  function selecttown(x){
   if(x!="请选择") {
      window.location.href='index.php?cid='+x+"&pid="+form1.tb_carte.value;
	 } 
  }
</script>
<body>
 <form  name="form1">   
  <table width="300"   border="0"   cellpadding="0"   cellspacing="0" background="images/ddd.JPG">   
      <tr   align="center">
        <td   height="30" colspan="2"   nowrap><span class="STYLE2">级联菜单的应用</span></td>
      </tr>
      <tr   align="center">     
          <td width="120"   height="23"   nowrap><span class="STYLE1">省级名称:   </span></td>   
          <td width="180" align="left"   nowrap><select   name="tb_carte" onChange="selectcity(this.value);" > 
   <option  value="请选择"> 请选择</option>	 
  <?php 
  $query=mysql_query("select * from tb_carte");
  $myrow=mysql_fetch_array($query);
  if($query==true){
	do{
  ?> 
    <option value="<?php echo $myrow[id];?>" 
	  <?php
	  if($_SESSION["pid"]!="") {
	     if($_SESSION["pid"]==$myrow[id]){
	      echo "selected=\"selected\""; 
	    }
	   }?> ><?php echo $myrow[name];?></option>   
    <?php
	 }while($myrow=mysql_fetch_array($query));
	  }?>
	</select></td>
      </tr>
      <tr   align="center">
        <td   height="23"   nowrap class="STYLE1">市级名称:</td>
        <td align="left"   nowrap> 
  <?php if($_GET[pid]!="") { ?>
  <select   name="tb_carte1" onChange="selecttown(this.value);">
    <option  value="请选择" selected="selected"> 请选择</option>		
  <?php $query=mysql_query("select * from tb_carte1 where pid='".$_GET[pid]."'");
		      if($query==true){
				 while($myrow1=mysql_fetch_array($query)){		  ?>
    <option   value="<?php echo $myrow1[id];?>" 
	<?php
	  if($_SESSION["cid"]!=""){
	     if($_SESSION["cid"]==$myrow1[id]){
	      echo "selected=\"selected\"";	  
	    }
	   }?>><?php echo $myrow1[name1];?></option>
    <?php }}?>
  </select>
  <?php }  ?>  </td>
      </tr>
      <tr   align="center">
        <td   height="23"   nowrap class="STYLE1">县/镇级名称:</td>
        <td align="left"   nowrap>
  <?php if($_GET[cid]!=""){ ?>
  <select   name="tb_carte1"> 	
	<?php 
	$query=mysql_query("select * from tb_carte2 where cid='".$_GET[cid]."'");
		   if($query==true){
			  while($myrow1=mysql_fetch_array($query)){		  ?>
    <option   value="<?php echo $myrow1[id];?>"><?php echo $myrow1[name2];?></option>
    <?php }}?>
  </select>
  <?php  } ?> </td>
      </tr>   
  </table>   
</form>   
</body>
</html>
