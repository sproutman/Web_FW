<?php 
	class Message_XML extends DomDocument{
	private $Root;
	public function __construct() {
		parent:: __construct();
		$this->load("message.xml");}
public function select_message($Action){
	$Root  = $this->documentElement;
	$xpath = new DOMXPath($this);
	$Node_Record = $xpath->query("//record[admin_id='$Action']"); 
	 $g=0;
		foreach($Node_Record->item(0)->childNodes as $node){
		   $field[$g]=iconv("UTF-8","GB2312",$node->textContent);
			$g++;	}	
	print "<table width='450' border=1 cellpadding=3 cellspacing=1 bgcolor='#00CCFF'>";
	print "<tr><td width='95'align='right'>用户名：</td><td><input type=text name='user' value='$field[1]' size=30></td></tr>";
	print "<tr><td width='95'align='right'>密码：</td><td><input type=text name='pass' value='$field[2]' size=30></td></tr>";
	print "<tr><td width='95'align='right'>地址：</td><td><input type=text name='address' value='$field[3]' size=30></td></tr>";
	print "</table>"; }	  
   }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>查询XML文件</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 13px;
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
.STYLE2 {font-size: 18px}
-->
</style></head>

<body>
<table width=450 height=35 border=1 cellpadding=3 cellspacing=1 bgcolor="#00CCFF">
  <form name="form1" method="get" action="index.php">
    <tr>
      <td height=35 align="center">请输入用户编号
        <input name="Action" type="text" id="Action">
          <input type="submit" name="Submit" value="提交">        </td>
    </tr>
  </form>
  <?php                                                                                                                      
	  if($Submit==true){
		 $HawkXML = new Message_XML;   
		 $HawkXML->select_message($_GET["Action"]);	 }	?>
</table>
</body>
</html>
