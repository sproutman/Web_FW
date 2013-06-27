<?php
	//Message_XML�࣬�̳�PHP5��DomDocument��
	class Message_XML extends DomDocument{
	//����
	private $Root;
	//����
	//���캯��
	public function __construct() {
		parent:: __construct();
	//�������ȡ�洢������Ϣ��XML�ĵ�message.xml
	if (!file_exists("message.xml")){
		$xmlstr = "<?xml version='1.0' encoding='GB2312'?><message></message>";
		$this->loadXML($xmlstr);
		$this->save("message.xml");
	}
	else
		$this->load("message.xml");
}
public function add_message($user,$pass,$address){  //�������
	$Root = $this->documentElement;
	//��ȡ������Ϣ
	$admin_id =date("Ynjhis");
	$Node_admin_id= $this->createElement("admin_id");
	$text= $this->createTextNode(iconv("GB2312","UTF-8",$admin_id));
	$Node_admin_id->appendChild($text);
	
	$Node_user = $this->createElement("user");
	$text  = $this->createTextNode(iconv("GB2312","UTF-8",$user));
	$Node_user->appendChild($text);
	
	$Node_pass = $this->createElement("pass");
	$text= $this->createTextNode(iconv("GB2312","UTF-8",$pass));
	$Node_pass->appendChild($text);

	$Node_address = $this->createElement("address");
	$text= $this->createTextNode(iconv("GB2312","UTF-8",$address));
	$Node_address->appendChild($text);

	$Node_Record = $this->createElement("record");
	$Node_Record->appendChild($Node_admin_id);
	$Node_Record->appendChild($Node_user);
	$Node_Record->appendChild($Node_pass);
	$Node_Record->appendChild($Node_address);
	//���뵽�������
	$Root->appendChild($Node_Record);
	$this->save("message.xml");  
	echo "<script>alert('��ӳɹ�');location.href='".$_SERVER['PHP_SELF']."'</script>";
}

public function show_message(){  //��ȡ����
    $root=$this-documentElement;
	$xpath=new DOMXPath($this);
	
	$Node_Record=$this->getElementsByTagName("record");
	$Node_Record_length=$Node_Record->length;
	print"<table width='350' bgcolor='#97F7ED'><tr>";
    print"<td width='115' height='22' align='center'>";
	print"<b>�û���</b>";
	print"</td><td width='115' align='center'>";
    print"<b>����</b>";
	print"</td><td width='120' align='center'>";
	print"<b>��ַ</b></td></tr>";

	for($i=0;$i<$Node_Record->length;$i++){
	    $k=0;
		foreach($Node_Record->item($i)->childNodes as $articles){
		   $field[$k]=iconv("UTF-8","GB2312",$articles->textContent);
			$k++;
	}
	print"<table width='350' bgcolor='#97F7ED'><tr>";
	print"<td width='115' height='22' align='center'>";
	print"$field[1]";
	print"</td><td width='115' align='center'>";
    print"$field[2]";
	print"</td><td width='120' align='center'>";
	print"$field[3]";
	print"</td>";
	print"</tr></table>"; 
	}}
	public function post_message(){
		print "<table width='350' bgcolor='#97F7ED'><form method='post' action='?Action=add_message'>";
		print "<tr><td  width='100'height='22' align='center'>�û�����</td><td><input type=text name='user' size=30></td></tr>";
		print "<tr><td width='100' height='22' align='center'>���룺</td><td><input type=text name='pass' size=30></td></tr>";
		print "<tr><td width='100' height='22' align='center'>��ַ��</td><td><input type=text name='address' size=30></td></tr>";
		print "<tr><td width='100' height='22'align='center'><input type='submit' value='�������'></td><td align='right'><a href=?Action=show_message>�鿴����</a>&nbsp;&nbsp;&nbsp;&nbsp;</td></tr></form></table>";
	}

}
?>

<html>                                                                                                                           
	<head>                                                                                                                         
		<title>���XML����</title>                                                                                                 
		<style>td,body{font-size:14	px}a:link {
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
</style>                                                                                      
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312"></head>                                                                                                                        
<body>                                                                                                                         
<table width=350 height=35 border=0 cellpadding=0 cellspacing=0 bgcolor="#97F7ED">                                
                                                                                                                          
		<tr>                                                                                                                         
			<td height=35 align="center">&nbsp;&nbsp;<a href=?Action=post_message>�������</a></td>
		</tr>  
		<?php                                                                                       
		$HawkXML = new Message_XML;     
		$Action ="";      
		if(isset($_GET['Action']))     
			  $Action = $_GET['Action'];                                                                                       
	  	switch($Action){                                                                                            
			case "show_message":	    //�鿴                                                                               
				$HawkXML->show_message();                                                                         
				break;                                                                                                     
			case "post_message":        //�ύ                                                                               
				$HawkXML->post_message();                                                                       
				break;                                                                                                      
			case "add_message":          //���                                                                            
				$HawkXML->add_message($_POST['user'],$_POST['pass'],$_POST['address']);                                             
				break;	  }                                                                                                
	     ?>
</table>                                                                                                                   
</body>                                                                                                                      
	</html>                                                                                                                        