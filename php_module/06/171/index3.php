<?php session_start(); $res=$field; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��̬�����ֶ�</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 12px}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="index_ok.php?fields=<?php echo $field;?>">
  <table width="467" height="289" border="0" cellpadding="0" cellspacing="0" background="images/bg3.jpg">
    <tr>
      <td width="168" height="89">&nbsp;</td>
      <td width="289">&nbsp;</td>
    </tr>
    <tr>
      <td height="30" align="right"><span class="STYLE1">ѡ���&nbsp;</span></td>
      <td class="STYLE1">
	
	  <select name="table" id="table">
   <?php 	
		$id=mysql_connect("localhost","root","root") or die('����ʧ��:' . mysql_error());          
		if(mysql_select_db("$res",$id)){		
          $result = mysql_list_tables ("$res");
          $i = 0;
          while ($i < mysql_num_rows ($result)) {
          $tb_names = mysql_tablename ($result, $i);  
          $i++;
?>
	    <option value="<?php echo $tb_names; ?>"><?php echo $tb_names; ?></option>
<?php }}?>
	    </select></td>
    </tr>
    <tr>
      <td height="30" align="right"><span class="STYLE1">�ֶ�&nbsp;</span></td>
      <td class="STYLE1"><input name="field" type="text" id="field" size="20"></td>
    </tr>
    <tr>
      <td height="30" align="right"><span class="STYLE1">����&nbsp;</span></td>
      <td class="STYLE1"><select name="type" id="type">
        <option>int</option>
        <option>text</option>
        <option>date</option>
        <option>double</option>
        <option>varchar</option>
        <option>datetime</option>
        <option>blob</option>
      </select>      </td>
    </tr>
    <tr>
      <td height="30" align="right"><span class="STYLE1">����&nbsp;</span></td>
      <td class="STYLE1"><input name="length" type="text" id="length" size="15"></td>
    </tr>
    <tr>
      <td height="30" align="right"><span class="STYLE1">NULL&nbsp;</span></td>
      <td class="STYLE1"><input type="radio" name="null" value="null">
        null
        <input type="radio" name="null" value="not null">
        not null </td>
    </tr>
    <tr>
      <td height="30" align="right">&nbsp;</td>
      <td><input type="submit" name="Submit3" value="�ύ" /></td>
    </tr>
    <tr>
      <td height="20" align="right">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>