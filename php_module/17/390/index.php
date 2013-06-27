<?php
	class Message_XML extends DomDocument{
	private $Root;
	public function __construct() {
		parent:: __construct();
	if (!file_exists("message.xml")){
		$xmlstr = "<?xml version='1.0' encoding='GB2312'?><message></message>";
		$this->loadXML($xmlstr);
		$this->save("message.xml");
	}else
		$this->load("message.xml"); }
//��������
public function add_message($bbs_zt,$bbs_nr){
	$Root = $this->documentElement;
	//��ȡ������Ϣ
	$bbs_id =date("Ynjhis");
	$Node_bbs_id= $this->createElement("bbs_id");
	$text= $this->createTextNode(iconv("GB2312","UTF-8",$bbs_id));
	$Node_bbs_id->appendChild($text);
	$Node_bbs_zt = $this->createElement("bbs_zt");
	$text  = $this->createTextNode(iconv("GB2312","UTF-8",$bbs_zt));
	$Node_bbs_zt->appendChild($text);
	$Node_bbs_nr = $this->createElement("bbs_nr");
	$text= $this->createTextNode(iconv("GB2312","UTF-8",$bbs_nr));
	$Node_bbs_nr->appendChild($text);
	//����һ�����Լ�¼
	$Node_Record = $this->createElement("record");
	$Node_Record->appendChild($Node_bbs_id);
	$Node_Record->appendChild($Node_bbs_zt);
	$Node_Record->appendChild($Node_bbs_nr);
	//���뵽�������
	$Root->appendChild($Node_Record);
	$this->save("message.xml");  
	echo "<script>alert('��ӳɹ�');location.href='".$_SERVER['PHP_SELF']."'</script>";
}
//ɾ������
public function delete_message($bbs_id){
	$Root = $this->documentElement;
	//��ѯ�û�ѡ��ɾ�������Լ�¼
	$xpath = new DOMXPath($this);
	$Node_Record= $xpath->query("//record[bbs_id=$bbs_id]");
	$Root->removeChild($Node_Record->item(0));
	$this->save("message.xml");
	echo "<script>alert('ɾ���ɹ�');location.href='".$_SERVER['PHP_SELF']."'</script>";
}		
//��ʾ����
public function show_message()	{
	$Root  = $this->documentElement;
	$xpath = new DOMXPath($this);
	//��ѯ���е����Լ�¼
	$Node_Record = $this->getElementsByTagName("record"); 
	$Node_Record_Length  =$Node_Record->length;
	//ѭ����������Ա����������Ϣ
	for($i=0;$i<$Node_Record->length;$i++)	{
		$K=0;
		foreach ($Node_Record->item($i)->childNodes as $articles) { 
			$Field[$K]=iconv("UTF-8","GB2312",$articles->textContent);
			$K++;
		}
		print"<table width='480' cellspacing='4' bgcolor='#B3FFD9'>
  <tr>
    <td width='95' height='25' align='center'><span class='STYLE2'>����</span></td>
    <td width='370'>$Field[1]</td>
  </tr>
  <tr>
    <td align='center' class='STYLE2'>����</td>
    <td>$Field[2]</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align='right'><a href='?Action=update_message&bbs_id=$Field[0]'>�༭</a> <a href='?Action=delete_message&bbs_id=$Field[0]'>ɾ��</a>&nbsp;&nbsp;&nbsp;</td>
  </tr>
</table>";
			}
}  
//�޸�����
public function update_message($bbs_id){
	$Root  = $this->documentElement;
	$xpath = new DOMXPath($this);
	$Node_Record = $xpath->query("//record[bbs_id=$bbs_id]"); 
	$K=0;
	foreach ($Node_Record->item(0)->childNodes as $articles) { 
 		$Field[$K]=iconv("UTF-8","GB2312",$articles->textContent);
 		$K++;
	}
	print"<table width='480' cellspacing='4' bgcolor='#B3FFD9'><form method='post' action='?Action=save_message&bbs_id=$bbs_id'>
  <tr>
    <td width='95' height='25' align='center'><span class='STYLE2'>����</span></td>
    <td width='370'><input name='bbs_zt' value='$Field[1]' type='text' size='40' /></td>
  </tr>
  <tr>
    <td align='center' class='STYLE2'>����</td>
    <td><textarea name='bbs_nr' cols='38' rows='5'>$Field[2]</textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type='submit' name='Submit' value='�ύ' /></td>
  </tr></form>
</table>";
}	  
//��������
public function save_message($bbs_id,$bbs_zt,$bbs_nr)	{
	$Root  = $this->documentElement;
	//��ѯ���޸ĵļ�¼
	$xpath = new DOMXPath($this);
	$Node_Record  = $xpath->query("//record[bbs_id=$bbs_id]"); 
	$Replace[0]=$bbs_id;
	$Replace[1]=$bbs_zt;
	$Replace[2]=$bbs_nr;
		$K=0;
		//�޸�
		foreach ($Node_Record->item(0)->childNodes as $articles) { 
			$Node_newText = $this->createTextNode(iconv("GB2312","UTF-8",$Replace[$K]));  
			$articles->replaceChild($Node_newText,$articles->lastChild);
			$K++;		}
		echo "<script>alert('�޸ĳɹ�');location.href='".$_SERVER['PHP_SELF']."'</script>";
		$this->save("message.xml");
}			
	//�ϴ�������Ϣ
	public function post_message(){
		print"<table width='480' cellspacing='4' bgcolor='#B3FFD9'><form method='post' action='?Action=add_message'>
  <tr>
    <td width='95' height='25' align='center'><span class='STYLE2'>����</span></td>
    <td width='370'><input <input name='bbs_zt' type='text' size='40' /></td>
  </tr>
  <tr>
    <td align='center' class='STYLE2'>����</td>
    <td><textarea name='bbs_nr' cols='38' rows='5'></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type='submit' name='Submit' value='�ύ' /></td>
  </tr></form>
</table>";	}
}
?>

<html>                                                                                                                           
	<head>                                                                                                                        
		<title>PHP+XML���԰�</title>                                                                                                 
		<style type="text/css">
<!--
.STYLE1 {
	font-size: 14px;
	font-weight: bold;
}
.STYLE2 {font-size: 13px}
body,td,th {
	font-size: 12px;
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
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312"></head>                                                                                                                        
	<body>             
	<table width="480" cellspacing="4" bgcolor="#B3FFD9">
  <tr>
    <td width="462" height="25" colspan="2" align="center"><span class="STYLE1">�� �� ��</span></td>
  </tr>
  <tr>
    <td height="25" align="center">��<a href=?Action=post_message>�������</a>��</td>
    <td height="25" align="center">��<a href=?Action=show_message>��ʾ������Ϣ</a>��</td>
  </tr>
  <?php                                                                                                                      
	$HawkXML = new Message_XML;   
		$Action ="";      
		if(isset($_GET['Action']))     
			$Action = $_GET['Action'];
		switch($Action){
			case "show_message":	//�鿴
				$HawkXML->show_message();
				break;			
			case "post_message"://�ύ
				$HawkXML->post_message();                break;
			case "add_message"://����
			    $HawkXML->add_message($_POST['bbs_zt'],$_POST['bbs_nr']);
				break;
			case "delete_message"://ɾ��
			    $HawkXML->delete_message($_GET["bbs_id"]);
				break;
			case "update_message"://�޸�
			    $HawkXML->update_message($_GET["bbs_id"]);
				break;
			case "save_message"://����
			    $HawkXML->save_message($_GET["bbs_id"],$_POST['bbs_zt'],$_POST['bbs_nr']);
				break;
			default://Ĭ�ϲ鿴
			    $HawkXML->show_message();
				break;	
		   }  ?>
</table> 

                                                                                                                                                                                                                             
		</body>                                                                                                                      
	</html>                                                                                                                        