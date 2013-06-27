<?php 
class Message_XML extends DOMDocument{  //创建一个类
private $root;                       
//构造函数
public function __construct(){ 
   parent ::__construct();
    $this->load("message.xml");
}
//输出XML文件中的内容
public function show_message(){
    $root=$this-documentElement;
	$xpath=new DOMXPath($this);	
	$node_record=$this->getelementsByTagName("record");
	$node_record_length=$node_record->length;
	print"<table width='450' bgcolor='#97F7ED'><tr>";
    print"<td width='150' height='22' align='center'>";
	print"<b>用户名</b>";
	print"</td><td width='150' align='center'>";
    print"<b>密码</b>";
	print"</td><td width='150' align='center'>";
	print"<b>地址</b>";
	print"</td></tr>";
	for($i=0;$i<$node_record->length;$i++){
	    $k=0;		
		foreach($node_record->item($i)->childNodes as $articles){
		   $field[$k]=iconv("UTF-8","GB2312",$articles->textContent);
			$k++;
	}
	print"<table width='450' bgcolor='#97F7ED'><tr>";
	print"<tr><td width='150' height='22' align='center'>";
	print"$field[0]";
	print"</td><td width='150' align='center'>";
    print"$field[1]";
	print"</td><td width='150' align='center'>";
	print"$field[2]";
	print"</tr></table>"; 
	}}
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>读取XML文件</title>
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
<table width="450" height="50" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="50" align="center" bgcolor="#97F7ED"><a href=?Action=show_message class="STYLE2">读取XML文件</a></td>
  </tr>
  <?php 
  $hawkXML=new Message_XML;
  $Action=$_GET['Action'];
  switch($Action){ 
      case "show_message":
	      $hawkXML->show_message();
	  break;
  }
  ?>
</table>
<table width="450" height="50" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="right" bgcolor="#97F7ED"><a href="message.xml">查看XML文件内容</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
</table>
</body>
</html>
