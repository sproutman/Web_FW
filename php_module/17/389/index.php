<?php 
	class Message_XML extends DomDocument{
	private $Root;
	public function __construct() {
		parent:: __construct();
	//�������ȡ�洢������Ϣ��XML�ĵ�message.xml
		$this->load("message.xml");}
public function delete_message($admin_id){
	$Root = $this->documentElement;
	$xpath = new DOMXPath($this);
	$Node_Record= $xpath->query("//record[admin_id='$admin_id']");
	$Root->removeChild($Node_Record->item(0));
	$this->save("message.xml");
	echo "<script>alert('ɾ���ɹ�');location.href='".$_SERVER['PHP_SELF']."'</script>";
}
public function show_message()	{
	$Root  = $this->documentElement;
	$xpath = new DOMXPath($this);
	$Node_Record = $this->getElementsByTagName("record"); 
	$Node_Record_Length  =$Node_Record->length;
	print"<table width='450' bgcolor='#97F7ED'><tr>";
    print"<td width='112' height='22' align='center'>";
	print"<b>�û���</b>";
	print"</td><td width='112' align='center'>";
    print"<b>����</b>";
	print"</td><td width='113' align='center'>";
	print"<b>��ַ</b></td><td width='113'>";
	print"&nbsp;";
	print"</td></tr>";
	for($i=0;$i<$Node_Record->length;$i++)	{
		$K=0;
		foreach ($Node_Record->item($i)->childNodes as $articles) { 
			$Field[$K]=iconv("UTF-8","GB2312",$articles->textContent);
			$K++;}
	print"<table width='450' bgcolor='#97F7ED'><tr>";
	print"<td width='112' height='22' align='center'>";
	print"$Field[1]";
	print"</td><td width='112' align='center'>";
    print"$Field[2]";
	print"</td><td width='113' align='center'>";
	print"$Field[3]";
	print"</td><td width='113' align='center'>";
	print"<a href='?Action=delete_message&admin_id=$Field[0]'>ɾ��</a></td>";
	print"</tr></table>"; 
	}}}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>ɾ��XML�ļ�</title>
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
    <td height="50" align="center" bgcolor="#97F7ED"><a href=?Action=show_message class="STYLE2">ɾ��XML�ļ�</a></td>
  </tr>
<?php                                                                                                                      
     $HawkXML = new Message_XML;   
		$Action ="";      
		if(isset($_GET['Action']))     
			$Action = $_GET['Action']; 	  	switch($Action){ 			case "show_message":	
			 	$HawkXML->show_message();
			break;
	  		case "delete_message"://ɾ��
				$HawkXML->delete_message($_GET['admin_id']);             
			break;          
	  }
	  	?>
</table> 

</body>
</html>
