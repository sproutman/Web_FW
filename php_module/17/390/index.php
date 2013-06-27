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
//增加留言
public function add_message($bbs_zt,$bbs_nr){
	$Root = $this->documentElement;
	//获取留言消息
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
	//建立一条留言记录
	$Node_Record = $this->createElement("record");
	$Node_Record->appendChild($Node_bbs_id);
	$Node_Record->appendChild($Node_bbs_zt);
	$Node_Record->appendChild($Node_bbs_nr);
	//加入到根结点下
	$Root->appendChild($Node_Record);
	$this->save("message.xml");  
	echo "<script>alert('添加成功');location.href='".$_SERVER['PHP_SELF']."'</script>";
}
//删除留言
public function delete_message($bbs_id){
	$Root = $this->documentElement;
	//查询用户选择删除的留言记录
	$xpath = new DOMXPath($this);
	$Node_Record= $xpath->query("//record[bbs_id=$bbs_id]");
	$Root->removeChild($Node_Record->item(0));
	$this->save("message.xml");
	echo "<script>alert('删除成功');location.href='".$_SERVER['PHP_SELF']."'</script>";
}		
//显示留言
public function show_message()	{
	$Root  = $this->documentElement;
	$xpath = new DOMXPath($this);
	//查询所有的留言记录
	$Node_Record = $this->getElementsByTagName("record"); 
	$Node_Record_Length  =$Node_Record->length;
	//循环输出其留言标题和内容信息
	for($i=0;$i<$Node_Record->length;$i++)	{
		$K=0;
		foreach ($Node_Record->item($i)->childNodes as $articles) { 
			$Field[$K]=iconv("UTF-8","GB2312",$articles->textContent);
			$K++;
		}
		print"<table width='480' cellspacing='4' bgcolor='#B3FFD9'>
  <tr>
    <td width='95' height='25' align='center'><span class='STYLE2'>标题</span></td>
    <td width='370'>$Field[1]</td>
  </tr>
  <tr>
    <td align='center' class='STYLE2'>内容</td>
    <td>$Field[2]</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align='right'><a href='?Action=update_message&bbs_id=$Field[0]'>编辑</a> <a href='?Action=delete_message&bbs_id=$Field[0]'>删除</a>&nbsp;&nbsp;&nbsp;</td>
  </tr>
</table>";
			}
}  
//修改留言
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
    <td width='95' height='25' align='center'><span class='STYLE2'>标题</span></td>
    <td width='370'><input name='bbs_zt' value='$Field[1]' type='text' size='40' /></td>
  </tr>
  <tr>
    <td align='center' class='STYLE2'>内容</td>
    <td><textarea name='bbs_nr' cols='38' rows='5'>$Field[2]</textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type='submit' name='Submit' value='提交' /></td>
  </tr></form>
</table>";
}	  
//保存留言
public function save_message($bbs_id,$bbs_zt,$bbs_nr)	{
	$Root  = $this->documentElement;
	//查询待修改的记录
	$xpath = new DOMXPath($this);
	$Node_Record  = $xpath->query("//record[bbs_id=$bbs_id]"); 
	$Replace[0]=$bbs_id;
	$Replace[1]=$bbs_zt;
	$Replace[2]=$bbs_nr;
		$K=0;
		//修改
		foreach ($Node_Record->item(0)->childNodes as $articles) { 
			$Node_newText = $this->createTextNode(iconv("GB2312","UTF-8",$Replace[$K]));  
			$articles->replaceChild($Node_newText,$articles->lastChild);
			$K++;		}
		echo "<script>alert('修改成功');location.href='".$_SERVER['PHP_SELF']."'</script>";
		$this->save("message.xml");
}			
	//上传留言信息
	public function post_message(){
		print"<table width='480' cellspacing='4' bgcolor='#B3FFD9'><form method='post' action='?Action=add_message'>
  <tr>
    <td width='95' height='25' align='center'><span class='STYLE2'>标题</span></td>
    <td width='370'><input <input name='bbs_zt' type='text' size='40' /></td>
  </tr>
  <tr>
    <td align='center' class='STYLE2'>内容</td>
    <td><textarea name='bbs_nr' cols='38' rows='5'></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type='submit' name='Submit' value='提交' /></td>
  </tr></form>
</table>";	}
}
?>

<html>                                                                                                                           
	<head>                                                                                                                        
		<title>PHP+XML留言板</title>                                                                                                 
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
    <td width="462" height="25" colspan="2" align="center"><span class="STYLE1">留 言 板</span></td>
  </tr>
  <tr>
    <td height="25" align="center">〖<a href=?Action=post_message>发表意见</a>〗</td>
    <td height="25" align="center">〖<a href=?Action=show_message>显示留言信息</a>〗</td>
  </tr>
  <?php                                                                                                                      
	$HawkXML = new Message_XML;   
		$Action ="";      
		if(isset($_GET['Action']))     
			$Action = $_GET['Action'];
		switch($Action){
			case "show_message":	//查看
				$HawkXML->show_message();
				break;			
			case "post_message"://提交
				$HawkXML->post_message();                break;
			case "add_message"://增加
			    $HawkXML->add_message($_POST['bbs_zt'],$_POST['bbs_nr']);
				break;
			case "delete_message"://删除
			    $HawkXML->delete_message($_GET["bbs_id"]);
				break;
			case "update_message"://修改
			    $HawkXML->update_message($_GET["bbs_id"]);
				break;
			case "save_message"://保存
			    $HawkXML->save_message($_GET["bbs_id"],$_POST['bbs_zt'],$_POST['bbs_nr']);
				break;
			default://默认查看
			    $HawkXML->show_message();
				break;	
		   }  ?>
</table> 

                                                                                                                                                                                                                             
		</body>                                                                                                                      
	</html>                                                                                                                        