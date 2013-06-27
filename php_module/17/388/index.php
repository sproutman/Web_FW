<?php 
	class Message_XML extends DomDocument{
	//属性
	private $Root;
	//方法
	//构造函数
	public function __construct() {
		parent:: __construct();
	//创建或读取存储留言信息的XML文档message.xml	
		$this->load("message.xml");
}
public function show_message(){
    $root=$this-documentElement;
	$xpath=new DOMXPath($this);	
	$Node_Record=$this->getElementsByTagName("record");
	$Node_Record_length=$Node_Record->length;
	print"<table width='450' bgcolor='#97F7ED'><tr>";
    print"<td width='112' height='22' align='center'>";
	print"<b>用户名</b>";
	print"</td><td width='112' align='center'>";
    print"<b>密码</b>";
	print"</td><td width='113' align='center'>";
	print"<b>地址</b></td><td width='113'>";
	print"&nbsp;";
	print"</td></tr>";
	for($i=0;$i<$Node_Record->length;$i++){
	    $k=0;
		foreach($Node_Record->item($i)->childNodes as $articles){
		   $field[$k]=iconv("UTF-8","GB2312",$articles->textContent);
			$k++;
	}
	print"<table width='450' bgcolor='#97F7ED'><tr>";
	print"<td width='112' height='22' align='center'>";
	print"$field[1]";
	print"</td><td width='112' align='center'>";
    print"$field[2]";
	print"</td><td width='113' align='center'>";
	print"$field[3]";
	print"</td><td width='113' align='center'>";
	print"<a href='?Action=update_message&admin_id=$field[0]'>修改</a></td>";
	print"</tr></table>"; 
	}
}
//修改数据
public function update_message($admin_id){
	$Root  = $this->documentElement;
	$xpath = new DOMXPath($this);
	$Node_Record = $xpath->query("//record[admin_id='$admin_id']"); 
	 $g=0;
		foreach($Node_Record->item(0)->childNodes as $articles){
		   $field[$g]=iconv("UTF-8","GB2312",$articles->textContent);
			$g++;	}	
	print "<table width='450' bgcolor='#97F7ED'><form method='post' action='?Action=save_message&admin_id=$admin_id'>";
	print "<tr><td width='95'align='right'>用户名：</td><td><input type=text name='user' value='$field[1]' size=30></td></tr>";
	print "<tr><td width='95'align='right'>密码：</td><td><input type=text name='pass' value='$field[2]' size=30></td></tr>";
	print "<tr><td width='95'align='right'>地址：</td><td><input type=text name='address' value='$field[3]' size=30></td></tr>";
	print "<tr><td colspan='2' align='center'><input type='submit' value='修改数据'></td></tr></form></table>";
}	  
//保存数据
public function save_message($admin_id,$user,$pass,$address)	{
	$Root  = $this->documentElement;
	//查询待修改的记录
	$xpath = new DOMXPath($this);
	$Node_Record  = $xpath->query("//record[admin_id='$admin_id']"); 
	$Replace[0]=$admin_id;
	$Replace[1]=$user;
	$Replace[2]=$pass;
	$Replace[3]=$address;
		$d=0;
		//修改
		foreach ($Node_Record->item(0)->childNodes as $articles) { 
			$Node_newText = $this->createTextNode(iconv("GB2312","UTF-8",$Replace[$d]));  
			$articles->replaceChild($Node_newText,$articles->lastChild);
			$d++;
		}
		echo "<script>alert('修改成功');location.href='".$_SERVER['PHP_SELF']."'</script>";
		$this->save("message.xml");
	}}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>修改XML文件</title>
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
    <td height="50" align="center" bgcolor="#97F7ED"><a href=?Action=show_message class="STYLE2">修改XML文件</a></td>
  </tr>
  <?php 
  	$hawkXML = new Message_XML;   
		$Action ="";      
		if(isset($_GET['Action']))     
			$Action = $_GET['Action'];                                                                                       
	switch($Action){
      case "show_message":
	      $hawkXML->show_message();
	  break;
	  case "update_message"://修改                                                                                               
		  $hawkXML->update_message($_GET['admin_id']);                                                                       
	  break;                                                                                                                   
	  case "save_message"://保存                                                                                                 
		  $hawkXML->save_message($_GET['admin_id'],$_POST['user'],$_POST['pass'],$_POST['address']);
	  break;  }
  ?>
   
</table> 

</body>
</html>
