<?php
session_start();
include "conn/conn.php";
$name=$_POST[txt_user];
$pwd=$_POST[txt_pwd];
$_SESSION[username]=$name;
$sql=mysql_query("select * from tb_client where regname='".$name."' and regpwd='".$pwd."'");
$result=mysql_fetch_array($sql);
if($result!=""){
$_SESSION[fig]=$result[fig];
?>
<script language="javascript">
	alert("��¼�ɹ�");window.location.href="browseclient.php";
</script>
<?php
}else{
?>
<script language="javascript">
	alert("�Բ�����������û��������벻��ȷ������������!");window.location.href="index.php";
</script>	
<?php
	}
?>