<?php 
class Message_XML extends DOMDocument{  //����һ����
private $root;                       
//���캯��
public function __construct(){ 
   parent ::__construct();
    $this->load("message.xml");
}
//���XML�ļ��е�����
public function show_message(){
    $root=$this-documentElement;
	$xpath=new DOMXPath($this);	
	$node_record=$this->getelementsByTagName("record");
	$node_record_length=$node_record->length;
	print"<table width='450' bgcolor='#97F7ED'><tr>";
    print"<td width='150' height='22' align='center'>";
	print"<b>�û���</b>";
	print"</td><td width='150' align='center'>";
    print"<b>����</b>";
	print"</td><td width='150' align='center'>";
	print"<b>��ַ</b>";
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
<title>��ȡXML�ļ�</title>
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
    <td height="50" align="center" bgcolor="#97F7ED"><a href=?Action=show_message class="STYLE2">��ȡXML�ļ�</a></td>
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
    <td align="right" bgcolor="#97F7ED"><a href="message.xml">�鿴XML�ļ�����</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
</table>
</body>
</html>
